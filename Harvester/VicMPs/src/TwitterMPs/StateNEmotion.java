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

import twitter4j.Status;

public class StateNEmotion{
	Status status;
	String emotion1;
	String emotion2;
	String day;
	String timeOfDay;
	String month;
	int dayOfMonth;
	int year;
	String screenName;
	long userID;
	String city;
	String party;
	
	// Format the JSONObject to Save to CouchDB
	
	public StateNEmotion(Status s, String d1, String d2, String c, String da, int dm, String m, int y, String t, String n, long i, String p){
		status = s;
		emotion1 = d1;
		emotion2 = d2;
		city = c;
		day = da;
		dayOfMonth = dm;
		month = m;
		year = y;		
		timeOfDay = t;
		screenName = n;
		userID = i;
		party = p;
	}
}