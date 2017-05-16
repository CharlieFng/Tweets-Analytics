/**
 * Team 18
 * Victoria
 * Yao Pan             777241
 * Min-Ying Chen       779101
 * Jinfeng Zhang       755121
 * Siyu Feng           745399
 * Lianyu Zeng         733863
*/

package TwitterMPs;

import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.util.Calendar;
import java.util.List;
import geocode.ReverseGeoCode;
import twitter4j.Paging;
import twitter4j.Status;
import twitter4j.Twitter;
import twitter4j.TwitterException;
import twitter4j.User;
// import twitter4j.json.DataObjectFactory;

public class TimeLine {
	
	public TimeLine(Twitter twitter, long user, String ipAddress, String dbName, String party) {
		
		Connect db = new Connect(ipAddress, dbName);		
		
		try {
			
			User tUser = twitter.showUser(user); 
						
			int numOfTwitters = tUser.getStatusesCount();
			
			System.out.println(">>> Number of Tweets: " + numOfTwitters);
			
			int numOfPages = (int) Math.ceil(numOfTwitters / 200); // Find how many pages to be read
			
			String hourOfDay; // Hour
			
			String dayOfWeek = null; // Day of week
			
			int dayOfMonth; // Day of month
			
			String monOfYear = null; // Month
			
			int year; // Year
			
			ReverseGeoCode reverseGeoCode;
			
			// Only can collect up to 3200 Tweets
			if (numOfTwitters > 3200) {
				numOfPages = 17;
			}
			
			for (int i = 1; i <= numOfPages + 1 ; i++ ) {
				
				Paging paging = new Paging(i, 200);
	            // gets Twitter instance with default credentials
	            List<Status> statuses = twitter.getUserTimeline(user, paging);

	            for (Status status : statuses) {    	            	

	            	
	            	Calendar createdAt = Calendar.getInstance();
	            	
	            	String city = null;

	            	if (status.getGeoLocation() == null) {
	            		city = null;	            		
	            	} else {
	            		try {
	            			// Do reverse geoCoding
	        				reverseGeoCode = new ReverseGeoCode(new FileInputStream("AU.txt"), true);
	        				// Find the city / suburb
	        				city = reverseGeoCode.nearestPlace(status.getGeoLocation().getLatitude(), status.getGeoLocation().getLongitude()).toString();
	        				System.out.println("Tweeted in the City of " + city);
	        			} catch (FileNotFoundException e1) {
	        				// TODO Auto-generated catch block
	        				e1.printStackTrace();
	        			} catch (IOException e1) {
	        				// TODO Auto-generated catch block
	        				e1.printStackTrace();
	        			}
		            	  
	            	}      	
	            	
	            	// Parse the createdAt
	            	createdAt.setTime(status.getCreatedAt());
	            	
	            	System.out.println("@" + status.getUser().getScreenName() + " - " + status.getText() + status.getCreatedAt());
	            	
	            	// Find time of the day
	            	if (createdAt.get(Calendar.HOUR_OF_DAY) >= 6 && createdAt.get(Calendar.HOUR_OF_DAY) <= 12) {
	            		hourOfDay = "Morning";
	            	} else if (createdAt.get(Calendar.HOUR_OF_DAY) >= 13 && createdAt.get(Calendar.HOUR_OF_DAY) <= 18) {
	            		hourOfDay = "Afternoon";
	            	} else {
	            		hourOfDay = "Night";
	            	}
	            	
	            	// Find day of the week
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
	            
	            	// Find the month
	            	dayOfMonth = createdAt.get(Calendar.DAY_OF_MONTH);
            	
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
	            	// Find the year
	            	year = createdAt.get(Calendar.YEAR);
	            		                	
	            	// Sentiment Analysis
	            	
	            	WordEmotion we = new WordEmotion();
	            	
	            	String emotion1 = we.analysis(status.getText());
	            	
	            	String emotion2 = "normal";
	            	
	            	switch (emotion1.toLowerCase()) {
	            		case "happy" : emotion2 = "positive";
	            				break;
	            		case "lovely" : emotion2 = "positive";
    							break;
	            		case "positive" : emotion2 = "positive";
    							break;
	            		case "not negative" : emotion2 = "positive";
    							break;
	            		case "negative" : emotion2 = "negative";
    							break;
	            		case "sad" : emotion2 = "negative";
    							break;
	            		case "sick" : emotion2 = "negative";
    							break;
	            		case "not happy" : emotion2 = "negative";
    							break;
	            		case "not lovely" : emotion2 = "negative";
    							break;
	            	}
	            	
	            	StateNEmotion sne = new StateNEmotion(status, emotion1, emotion2, city, dayOfWeek, dayOfMonth, monOfYear, year, hourOfDay, tUser.getScreenName(), user, party);	                
	            	// Save to DB
	            	db.save(sne);
	            	
	            }
	            // Put the thread to sleep for 3 seconds to avoid rate limit
	            System.out.print(">> Sleep for 3 seconds");
				try {
					Thread.sleep(1000);
					System.out.print(".");
					Thread.sleep(1000);
					System.out.print(".");
					Thread.sleep(1000);
					System.out.print(".");
				} catch (InterruptedException e) {
					// TODO Auto-generated catch block
					e.printStackTrace();
				}
	            
			}
			System.out.println(">>> Number of Tweets: " + numOfTwitters);
			
        } catch (TwitterException te) {
            te.printStackTrace();
            System.out.println("Failed to get timeline: " + te.getMessage());
            System.exit(-1);
        }
	}
	
}
