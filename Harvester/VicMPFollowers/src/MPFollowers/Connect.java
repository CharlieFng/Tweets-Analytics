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

import org.lightcouch.CouchDbClient;
import org.lightcouch.CouchDbProperties;
import org.lightcouch.Response;

public class Connect {
private CouchDbClient dbClient;
	
	public Connect(String ipAddress, String dbName){

		// Connect to CouchDB
		
		CouchDbProperties properties = new CouchDbProperties()
			.setDbName(dbName)
			.setCreateDbIfNotExist(true)
			.setProtocol("http")
			.setHost(ipAddress)
			.setPort(5984);
		dbClient = new CouchDbClient(properties);
	}
	
	// Save to CouchDB
	public Response save(Object o){
		Response res = dbClient.save(o);	
		return res;
	}	
}
