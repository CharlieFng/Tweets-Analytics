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

import com.google.gson.Gson;

public class Removal {

	@SuppressWarnings("unused")
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Gson gson = new Gson();
		Connect db = new Connect("115.146.94.241", "followers");
		int i = 0;
		int count = 0;
		db.delete();
    }
}


