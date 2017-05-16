/**
 * Team 18
 * Victoria
 * Yao Pan             777241
 * Min-Ying Chen       779101
 * Jinfeng Zhang       755121
 * Siyu Feng           745399
 * Lianyu Zeng         733863
*/

package harvester;

import twitter4j.Status;

public class StateNEmotion{
	Status status;
	String emotion;
	String state;
	String city;
	String day;		
	int dayOfMonth;
	String month;
	int year;
	String timeOfDay;
		
	public StateNEmotion(Status s, String d){
		status = s;
		emotion = d;
	}
	
	// Format the JSONObject to Save to CouchDB
	
	public StateNEmotion(Status s, String d, String t, String c, String da, int dm, String m, int y, String td){
		status = s;
		emotion = d;
		state = t;
		city = c;
		day = da;
		dayOfMonth = dm;
		month = m;
		year = y;
		timeOfDay = td;
	}
}