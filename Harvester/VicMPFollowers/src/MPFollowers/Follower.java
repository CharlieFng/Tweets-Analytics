/**
 * Team 18
 * Victoria
 * Yao Pan             777241
 * Min-Ying Chen       779101
 * Jinfeng Zhang       755121
 * Siyu Feng           745399
 * Lianyu Zeng         733863
*/

package MPFollowers;

import org.json.simple.JSONObject;
import twitter4j.IDs;
import twitter4j.Twitter;
import twitter4j.TwitterException;
import twitter4j.User;

public class Follower {

	@SuppressWarnings({ "unused"})
	public Follower(Twitter twitter, long twitterID, String ipAddress, String dbName, long lCursor, String fParty) {

		IDs followersIDs = null;
		int seq = 0;
		JSONObject jO = new JSONObject();
				
		try {
			// Get the user it follows
			String fName = twitter.showUser(twitterID).getScreenName().toString();
						
			do {
				followersIDs = twitter.getFollowersIDs(twitterID, lCursor, 100);
				
				for (long j : followersIDs.getIDs()) {
					
					// Print out Cursor			
					System.out.println(">> Cursor: " + lCursor);					
					
					User user = twitter.showUser(j);					
										
					if (!user.isProtected()) {
						// Get Tweets from Timeline						
						TimeLine timeLine = new TimeLine(twitter, j, ipAddress, dbName, fParty, fName, lCursor);						
					}	
					
					// Put the thread to sleep for 5 seconds to avoid rate limit
					System.out.print(">> Sleep for 5 seconds");
					Thread.sleep(1000);
					System.out.print(".");
					Thread.sleep(1000);
					System.out.print(".");
					Thread.sleep(1000);
					System.out.print(".");
					Thread.sleep(1000);
					System.out.print(".");
					Thread.sleep(1000);
					System.out.println(".");
					
					seq++;
				}
				lCursor = followersIDs.getNextCursor();
			} while ((lCursor = followersIDs.getNextCursor()) != 0);
		} catch (TwitterException | InterruptedException e) {
			try {
				throw e;
			} catch (Exception e1) {
				// TODO Auto-generated catch block
				e1.printStackTrace();
			}
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}
}
