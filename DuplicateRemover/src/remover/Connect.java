/**
 * Team 18
 * Victoria
 * Yao Pan             777241
 * Min-Ying Chen       779101
 * Jinfeng Zhang       755121
 * Siyu Feng           745399
 * Lianyu Zeng         733863
*/


package remover;

import java.util.List;
import org.json.simple.JSONObject;
import org.lightcouch.CouchDbClient;
import org.lightcouch.CouchDbProperties;
import org.lightcouch.Response;
import org.lightcouch.View;

public class Connect {
private CouchDbClient dbClient;
	
	public Connect(String ipAddress, String dbName){

		CouchDbProperties properties = new CouchDbProperties()
			.setDbName(dbName)
			.setCreateDbIfNotExist(true)
			.setProtocol("http")
			.setHost(ipAddress)
			.setPort(5984);
		dbClient = new CouchDbClient(properties);
	}
	
	public Response save(Object o){
		Response res = dbClient.save(o);
		return res;
	}
	
	public void delete(){
		View view = dbClient.view("test/remove");
		List<JSONObject> list = view.query(JSONObject.class);
		for(JSONObject json : list){
			String id = json.get("id").toString();
			String rev = json.get("value").toString();
			dbClient.remove(id, rev);
		}		
	}
}
