/**
 * Team 18
 * Victoria
 * Yao Pan             777241
 * Min-Ying Chen       779101
 * Jinfeng Zhang       755121
 * Siyu Feng           745399
 * Lianyu Zeng         733863
*/

// This Harvester Collects Twitters from MP Followers

package MPFollowers;

import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import org.kohsuke.args4j.CmdLineException;
import org.kohsuke.args4j.CmdLineParser;
import com.opencsv.CSVReader;
import twitter4j.Twitter;
import twitter4j.TwitterFactory;
import twitter4j.conf.Configuration;
import twitter4j.conf.ConfigurationBuilder;

public class Harvester {

	@SuppressWarnings("unused")
	public static void main(String[] args) {

		// Get Args from Command Line
		CommandLineValuesClient cmd = new CommandLineValuesClient();
		CmdLineParser cmdParser = new CmdLineParser(cmd);		
		try {
			cmdParser.parseArgument(args);
		} catch (CmdLineException e) {
			System.err.println(e.getMessage());
			cmdParser.printUsage(System.err);
			System.exit(-1);
		}
		
		String party = cmd.getParty();
		
		// Validate Party		
		switch (party.toLowerCase()) {
		case "liberal": party = "Liberal";
						break;
		case "greens": party = "Greens";
						break;
		case "nationals": party = "Nationals";
						break;
		case "labor": party = "Labor";
						break;
		case "independent": party = "Independent";
						break;
		default: System.out.println("-p <Party> is invalid, please check.");
		 		 System.exit(-1);
		 		 break;
		}
		
		int a = cmd.getAuth();
		CSVReader fileReader = null;
		String ConsumerKey = "";
		String ConsumerSecret = "";
		String AccessToken = "";
		String AccessTokenSecret = "";
		
		try {
			// Read Authentication detail from file
			fileReader = new CSVReader(new FileReader("auth.txt"));
			String[] line = null;
			for (int i = 1; i <= a; i++) {
				if ((line = fileReader.readNext())!= null) {
					ConsumerKey = line[0];
					ConsumerSecret = line[1];
					AccessToken = line[2];
					AccessTokenSecret = line[3];
				}				
			}			
		} catch (FileNotFoundException e) {
			System.out.println("Can not find auth.txt file.");
			e.printStackTrace();
			System.exit(-1);
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		};
		
		// Connect to CouchDB
		ConfigurationBuilder cb = new ConfigurationBuilder();
		cb.setDebugEnabled(false)
		.setOAuthConsumerKey(ConsumerKey)
		.setOAuthConsumerSecret(ConsumerSecret)
		.setOAuthAccessToken(AccessToken)
		.setOAuthAccessTokenSecret(AccessTokenSecret)
		.setJSONStoreEnabled(true);
		
		Configuration cbb = cb.build();
		
		Twitter twitter = new TwitterFactory(cbb).getInstance();
		
		// Get Twitters from Followers
		
		Follower follower = new Follower(twitter, Long.valueOf(cmd.getID()), cmd.getIP(), cmd.getDB(), cmd.getCursor(), party);
		
	}

}
