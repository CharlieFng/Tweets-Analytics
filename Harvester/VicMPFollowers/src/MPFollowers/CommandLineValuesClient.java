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


import org.kohsuke.args4j.Option;

public class CommandLineValuesClient {

	@Option(required = true, name = "-d", aliases = { "--db_name" }, usage = "Database Name")
	private String dbName;
	
	@Option(required = true, name = "-h", aliases = { "--ipaddress" }, usage = "IP Address")
	private String ipAddress;
	
	@Option(required = true, name = "-t", aliases = { "--twitterid" }, usage = "Twitter ID")
	private String twitterID;
	
	@Option(required = true, name = "-a", aliases = { "--authentication" }, usage = "Authentication")
	private int auth;
	
	@Option(required = true, name = "-p", aliases = { "--party" }, usage = "Party")
	private String party;
	
	@Option(required = true, name = "-c", aliases = { "--cursor" }, usage = "Cursor")
	private long cursor = -1;
	
	public String getDB() {
		return dbName;
	}
	
	public String getIP() {
		return ipAddress;
	}
	
	public String getID() {
		return twitterID;
	}
	
	public int getAuth() {
		return auth;
	}
	
	public String getParty() {
		return party;
	}
	
	public long getCursor() {
		return cursor;
	}
}