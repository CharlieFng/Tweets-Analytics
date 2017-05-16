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

public class States {
	
	public States() {
		
	}
	// Find the state
	public String getStates (double lon, double lat) {
		
	    double vic_SW_lat = -39.2247306d; // Victoria SW Coordinates
	    double vic_SW_lon = 140.9624773d;
	    
	    double vic_NE_lat = -33.9810507d; // Victoria NE Coordinates
	    double vic_NE_lon = 149.9764882d;
	    
	    double qld_SW_lat = -29.1785876d; // Queensland SW Coordinates
	    double qld_SW_lon = 137.9945748d;
	    
	    double qld_NE_lat = -9.929729999999999d; // Queensland NE Coordinates
	    double qld_NE_lon = 153.5529199d;
	    
	    double act_SW_lat = -35.9205307d; // ACT SW Coordinates
	    double act_SW_lon = 148.7640971d;
	    
	    double act_NE_lat = -35.1245128d; // ACT NE Coordinates
	    double act_NE_lon = 149.3992848d;
	    
	    double nsw_SW_lat = -37.5050318d; // NSW SW Coordinates
	    double nsw_SW_lon = 140.9992123d;
	    
	    double nsw_NE_lat = -28.156192d; // NSW NE Coordinates
	    double nsw_NE_lon = 153.6387812d;
		
	    double tas_SW_lat = -43.74298d; // NSW SW Coordinates
	    double tas_SW_lon = 143.8182852d;
	    
	    double tas_NE_lat = -39.4380355d; // NSW NE Coordinates
	    double tas_NE_lon = 148.4987601d;
	    
	    double nt_SW_lat = -26.0168698d; // NSW SW Coordinates
	    double nt_SW_lon = 129.0004244d;
	    
	    double nt_NE_lat = -10.9055196d; // NSW NE Coordinates
	    double nt_NE_lon = 137.9990092d;
	    
	    double sa_SW_lat = -38.06121d; // NSW SW Coordinates
	    double sa_SW_lon = 129.0005162d;
	    
	    double sa_NE_lat = -25.996392d; // NSW NE Coordinates
	    double sa_NE_lon = 141.0028804d;
	    
	    double wa_SW_lat = -35.1939944d; // NSW SW Coordinates
	    double wa_SW_lon = 112.9212191d;
	    
	    double wa_NE_lat = -13.6894901d; // NSW NE Coordinates
	    double wa_NE_lon = 129.0025979d;
	    
	    String state = null;
	    
		if ( lon > wa_SW_lon && lon < wa_NE_lon && lat > wa_SW_lat && lat < wa_NE_lat) {
	    	state = "WA";
	    }
	    
	    if ( lon > sa_SW_lon && lon < sa_NE_lon && lat > sa_SW_lat && lat < sa_NE_lat) {
	    	state = "SA";
	    }
	    
	    if ( lon > nt_SW_lon && lon < nt_NE_lon && lat > nt_SW_lat && lat < nt_NE_lat) {
	    	state = "NT";
	    }
	    
	    if ( lon > tas_SW_lon && lon < tas_NE_lon && lat > tas_SW_lat && lat < tas_NE_lat) {
	    	state = "TAS";
	    }
	    
	    if ( lon > qld_SW_lon && lon < qld_NE_lon && lat > qld_SW_lat && lat < qld_NE_lat) {
	    	state = "QLD";
	    }
	    
	    if ( lon > nsw_SW_lon && lon < nsw_NE_lon && lat > nsw_SW_lat && lat < nsw_NE_lat) {
	    	state = "NSW";
	    }
	    
	    if ( lon > vic_SW_lon && lon < vic_NE_lon && lat > vic_SW_lat && lat < vic_NE_lat) {
	    	state = "VIC";
	    }
	    
	    if ( lon > act_SW_lon && lon < act_NE_lon && lat > act_SW_lat && lat < act_NE_lat) {
	    	state = "ACT";
	    }
		return state; 
	} 
}
