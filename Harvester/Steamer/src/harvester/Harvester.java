/**
 * Team 18
 * Victoria
 * Yao Pan             777241
 * Min-Ying Chen       779101
 * Jinfeng Zhang       755121
 * Siyu Feng           745399
 * Lianyu Zeng         733863
*/

// This Harvester Collects Tweets from Streaming API

package harvester;

import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.util.Calendar;
import org.kohsuke.args4j.CmdLineException;
import org.kohsuke.args4j.CmdLineParser;
import geocode.ReverseGeoCode;
import twitter4j.FilterQuery;
import twitter4j.StallWarning;
import twitter4j.Status;
import twitter4j.StatusDeletionNotice;
import twitter4j.StatusListener;
import twitter4j.Twitter;
import twitter4j.TwitterFactory;
import twitter4j.TwitterStream;
import twitter4j.TwitterStreamFactory;
import twitter4j.conf.Configuration;
import twitter4j.conf.ConfigurationBuilder;

public class Harvester {

	@SuppressWarnings("unused")
	public static void main(String[] args) {
		
		// Get Args from Commandline
		CommandLineValuesClient cmd = new CommandLineValuesClient();
		CmdLineParser cmdParser = new CmdLineParser(cmd);		
		try {
			cmdParser.parseArgument(args);
		} catch (CmdLineException e) {
			System.err.println(e.getMessage());
			cmdParser.printUsage(System.err);
			System.exit(-1);
		}
		
		// Connect to DB
		ConfigurationBuilder cb = new ConfigurationBuilder();
		cb.setDebugEnabled(false)
		.setOAuthConsumerKey("Z9B1v1VOHLkompCn441YbtGEP")
		.setOAuthConsumerSecret("T0nd9crIXbTHFiKtg3rQbXQk4yOMOqDCC7JnzWP1AM0ydWHEzu")
		.setOAuthAccessToken("723755108878585857-QvKTFdtNTuymWLWsxBc90KPv3z9eBdW")
		.setOAuthAccessTokenSecret("ZqObjuQHJpyZCEGm3W9PSljMFfAAfXMADUyVweLg8jUZy");
		
	    // Set boundary 		
		double aus_SW_lat = -54.7772185d; // Australia SW Coordinates
	    double aus_SW_lon = 112.9214336d;
	    
	    double aus_NE_lat = -9.2198215d; // Australia NE Coordinates
	    double aus_NE_lon = 159.255497d;
		
	    States states = new States(); //State
	    
		Configuration cbb = cb.build();
		
		Twitter twitter = new TwitterFactory(cbb).getInstance();
		
		StatusListener listener = new StatusListener(){
		
		Connect db = new Connect(cmd.getIP(), cmd.getDB());
		
		int i = 0;
		ReverseGeoCode reverseGeoCode;
		String hourOfDay;
		String dayOfWeek = null;
		int dayOfMonth;
		String monOfYear = null;
		int year;	
		
		public void onStatus(Status status) {	            
			
			i++;
			
			Calendar createdAt = Calendar.getInstance();
        	
			String city = null;
        	
			if (status.getGeoLocation() != null) {
        		try {
        			// Do reverseGeoCoding
    				reverseGeoCode = new ReverseGeoCode(new FileInputStream("AU.txt"), true);
    				// Get city / suburb    				
    				city = reverseGeoCode.nearestPlace(status.getGeoLocation().getLatitude(), status.getGeoLocation().getLongitude()).toString();
    				System.out.println("Tweeted in the City of " + city);
    			} catch (FileNotFoundException e1) {
    				// TODO Auto-generated catch block
    				e1.printStackTrace();
    			} catch (IOException e1) {
    				// TODO Auto-generated catch block
    				e1.printStackTrace();
    			}	            		
        			            		
        	} else {
        		city = null;		            	  
        	}
			
			System.out.println(i+"]"+
        			status.getUser().getName() + " : " + status.getText() + "["+status.getCreatedAt()+"]"+status.getId()+ status.getGeoLocation());
        	
			// Parse createdAt
			createdAt.setTime(status.getCreatedAt());
			
			// Find the time
			if (createdAt.get(Calendar.HOUR_OF_DAY) >= 6 && createdAt.get(Calendar.HOUR_OF_DAY) <= 12) {
        		hourOfDay = "Morning";
        	} else if (createdAt.get(Calendar.HOUR_OF_DAY) >= 13 && createdAt.get(Calendar.HOUR_OF_DAY) <= 18) {
        		hourOfDay = "Afternoon";
        	} else {
        		hourOfDay = "Night";
        	}
        		 
			// Find day of week
        	switch (createdAt.get(Calendar.DAY_OF_WEEK)) {
        	case 0:  dayOfWeek = "Sunday";
                     break;
            case 1:  dayOfWeek = "Monday";
                     break;
            case 2:  dayOfWeek = "Tuesday";
                     break;
            case 3:  dayOfWeek = "Wednesday";
                     break;
            case 4:  dayOfWeek = "Thursday";
                     break;
            case 5:  dayOfWeek = "Friday";
                     break;
            case 6:  dayOfWeek = "Saturday";
                     break;
        	}        	
        
        	dayOfMonth = createdAt.get(Calendar.DAY_OF_MONTH);
    	
        	// Find month
        	switch (createdAt.get(Calendar.MONTH)) {
        	case 0:  monOfYear = "January";
                     break;
            case 1:  monOfYear = "February";
                     break;
            case 2:  monOfYear = "March";
                     break;
            case 3:  monOfYear = "April";
                     break;
            case 4:  monOfYear = "May";
                     break;
            case 5:  monOfYear = "June";
                     break;
            case 6:  monOfYear = "July";
                     break;
            case 7:  monOfYear = "August";
                     break;
            case 8:  monOfYear = "September";
                     break;
            case 9:  monOfYear = "October";
                     break;
            case 10: monOfYear = "November";
                     break;
            case 11: monOfYear = "December";
                     break;
        	}
        	
        	// Find year
        	year = createdAt.get(Calendar.YEAR);
			
        	// Sentiment Analysis
        	
			WordEmotion we = new WordEmotion();
        	
        	if ( status.getGeoLocation() != null) {
        		
        		String state = states.getStates(status.getGeoLocation().getLongitude(), status.getGeoLocation().getLatitude());
        		
        		System.out.println("One Twitter from " + state + " shows: " + we.analysis(status.getText()));
            	
            	StateNEmotion sne = new StateNEmotion(status, we.analysis(status.getText()), state, city, dayOfWeek, dayOfMonth, monOfYear, year, hourOfDay);
            	            	         	
          		db.save(sne);
            	
        	} else {
        		
        		// If geoCoding is null, use location info from the user profile
        		if (status.getUser().getLocation() != null) {
        			String location = status.getUser().getLocation().toLowerCase();
            		
            		System.out.println("User Location >>> " + location);
            		
            		if (location.contains("melbourne") || location.contains("vic")) {
            			
            			System.out.println("One Twitter from VIC shows: " + we.analysis(status.getText()));
                    	
                    	StateNEmotion sne = new StateNEmotion(status, we.analysis(status.getText()), "VIC", "Victoria", dayOfWeek, dayOfMonth, monOfYear, year, hourOfDay);

                    	db.save(sne);
            		}
            		
            		if (location.contains("sydney") || location.contains("nsw") || location.contains("new south wales")) {
            			
            			System.out.println("One Twitter from NSW shows: " + we.analysis(status.getText()));
                    	
                    	StateNEmotion sne = new StateNEmotion(status, we.analysis(status.getText()), "NSW", "New South Wales", dayOfWeek, dayOfMonth, monOfYear, year, hourOfDay);
                    	
                    	db.save(sne);
            		}
            		
            		if (location.contains("brisbane") || location.contains("qld") || location.contains("queensland")) {
            			
            			System.out.println("One Twitter from QLD shows: " + we.analysis(status.getText()));
                    	
                    	StateNEmotion sne = new StateNEmotion(status, we.analysis(status.getText()), "QLD", "Queensland", dayOfWeek, dayOfMonth, monOfYear, year, hourOfDay);
                    	
                    	db.save(sne);
            		}
            		
            		if (location.contains("darwin") || location.contains("nt") || location.contains("north territory")) {
            			
            			System.out.println("One Twitter from NT shows: " + we.analysis(status.getText()));
                    	
                    	StateNEmotion sne = new StateNEmotion(status, we.analysis(status.getText()), "NT", "North Territory", dayOfWeek, dayOfMonth, monOfYear, year, hourOfDay);
                    	
                    	db.save(sne);
            		}
            		
            		if (location.contains("perth") || location.contains("wa") || location.contains("western australia")) {
            			
            			System.out.println("One Twitter from WA shows: " + we.analysis(status.getText()));
                    	
                    	StateNEmotion sne = new StateNEmotion(status, we.analysis(status.getText()), "WA", "Western Australia", dayOfWeek, dayOfMonth, monOfYear, year, hourOfDay);
                    	
                    	db.save(sne);
            		}
            		
            		if (location.contains("adelaide") || location.contains("sa") || location.contains("south australia")) {
            			
            			System.out.println("One Twitter from SA shows: " + we.analysis(status.getText()));
                    	
                    	StateNEmotion sne = new StateNEmotion(status, we.analysis(status.getText()), "SA", "South Australia", dayOfWeek, dayOfMonth, monOfYear, year, hourOfDay);
                    	
                    	db.save(sne);
            		}
            		
            		if (location.contains("canberra") || location.contains("act")) {
            			
            			System.out.println("One Twitter from ACT shows: " + we.analysis(status.getText()));
                    	
                    	StateNEmotion sne = new StateNEmotion(status, we.analysis(status.getText()), "ACT", "Australian Capital Territory", dayOfWeek, dayOfMonth, monOfYear, year, hourOfDay);
                    	
                    	db.save(sne);
            		}
            		
            		if (location.contains("hobart") || location.contains("tas")) {
            			
            			System.out.println("One Twitter from TAS shows: " + we.analysis(status.getText()));
                    	
                    	StateNEmotion sne = new StateNEmotion(status, we.analysis(status.getText()), "TAS", "Tasmania", dayOfWeek, dayOfMonth, monOfYear, year, hourOfDay);
                    	
                    	db.save(sne);
            		}  
        		}
        		       		
        	}            
        	
		}
		
        public void onDeletionNotice(StatusDeletionNotice statusDeletionNotice) {
        	// TODO Auto-generated method stub
        }
        
        public void onTrackLimitationNotice(int numberOfLimitedStatuses) {
        	// TODO Auto-generated method stub
        }
        
        public void onException(Exception ex) {
        	// TODO Auto-generated method stub
            ex.printStackTrace();
        }
		
		@Override
		public void onScrubGeo(long arg0, long arg1) {
			// TODO Auto-generated method stub				
		}
		@Override
		public void onStallWarning(StallWarning arg0) {
			// TODO Auto-generated method stub				
		}
		
    };
    
    TwitterStream twitterStream = new TwitterStreamFactory(cbb).getInstance();
    twitterStream.addListener(listener);
    
    double [][]location = {{aus_SW_lon, aus_SW_lat},{aus_NE_lon, aus_NE_lat} };
	twitterStream.filter(new FilterQuery().locations(location));
	}
}


