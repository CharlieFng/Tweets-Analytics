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


import org.kohsuke.args4j.Option;

public class CommandLineValuesClient {

	@Option(required = true, name = "-d", aliases = { "--db_name" }, usage = "Database Name")
	private String dbName;
	
	@Option(required = true, name = "-h", aliases = { "--ipaddress" }, usage = "IP Address")
	private String ipAddress;
	
	public String getDB() {
		return dbName;
	}
	
	public String getIP() {
		return ipAddress;
	}
}