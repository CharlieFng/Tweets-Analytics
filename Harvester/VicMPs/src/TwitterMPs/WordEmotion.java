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

import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;
import java.util.*;

public class WordEmotion {

	private String[] filename;
	
	private HashMap<String, ArrayList<String>> emotion_map;
	private HashMap<String, Double> emotion_level;
	
	private String emoji_file;
	private String[][] emoji;
	
	private int NUM_EMOJI = 120;
	
	WordEmotion(){
		filename = new String[]{"keyword_happy.txt", "keyword_angry.txt", "keyword_intensity.txt",
				"keyword_lovely.txt", "keyword_negation.txt", "keyword_negative.txt", 
				"keyword_positive.txt", "keyword_sad.txt", "keyword_sick.txt"
				};
		
		emotion_map = new HashMap<String, ArrayList<String>> ();
		emotion_level = new HashMap<String, Double> ();
		
		emoji = new String[NUM_EMOJI][7];
		emoji_file = "synesketch_lexicon_emoticons.txt";
		
		try {
			init();
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}
	
	@SuppressWarnings("resource")
	private void init() throws IOException{
		for(int i=0; i<filename.length; i++){
			BufferedReader in = new BufferedReader(new FileReader(filename[i]));
			String line = in.readLine();
			ArrayList<String> al = new ArrayList<String>();
			while (line != null) {
				al.add(line);
				line = in.readLine();
			}
			String name = filename[i].substring(8, filename[i].length()-4);
			emotion_map.put(name, al);
			emotion_level.put(name, 0.0);
			//System.out.println(name);
			//System.out.println(al);
			in.close();
		}
		int num = 0;
		BufferedReader in = new BufferedReader(new FileReader(emoji_file));
		String line = in.readLine();
		while (line != null) {
			String[] str = line.split(" ");
			emoji[num][0] = str[0];
			emoji[num][1] = str[2];
			emoji[num][2] = str[3];
			emoji[num][3] = str[4];
			emoji[num][4] = str[5];
			emoji[num][5] = str[6];
			emoji[num][6] = str[7];
			num ++;
			line = in.readLine();	
		}
		NUM_EMOJI = num-1;
	}
	
	@SuppressWarnings({ "rawtypes", "unchecked" })
	public String analysis(String line){
		line = line.replaceAll("[@#]([a-zA-Z0-9])+", "");
		line = line.replaceAll("http(s)?://[a-zA-Z]+(\\.[a-zA-Z]+)+/[a-zA-Z0-9]+", "");
		
		for(int i=0; i<NUM_EMOJI; i++){
			if(line.contains(emoji[i][0])){
				double num = 0;
				num = emotion_level.get("happy");
				emotion_level.put("happy", num+Double.parseDouble(emoji[i][1]));
				num = emotion_level.get("sad");
				emotion_level.put("sad", num+Double.parseDouble(emoji[i][2]));
				num = emotion_level.get("angry");
				emotion_level.put("angry", num+Double.parseDouble(emoji[i][3])/2);
				num = emotion_level.get("angry");
				emotion_level.put("angry", num+Double.parseDouble(emoji[i][4]));
				num = emotion_level.get("sick");
				emotion_level.put("sick", num+Double.parseDouble(emoji[i][5]));		
			}
		}
		
		line = line.replaceAll("[^a-zA-Z0-9 ]", "");
		line = line.replaceAll(" +", " ");
		String[] linegroup = line.split(" ");
		
		Iterator iter = emotion_map.entrySet().iterator(); 
		for(int i=0; i<linegroup.length; i++){
			while (iter.hasNext()) { 
			    Map.Entry entry = (Map.Entry) iter.next(); 
			    String key = (String) entry.getKey(); 
			    if(key.equals("negation")||key.equals("intensity"))
			    	continue;
			    ArrayList<String> val = (ArrayList<String>) entry.getValue(); 
			    for(int j=0; j<linegroup.length; j++){
			    	if(val.contains(linegroup[j].toLowerCase())){
			    		if(j!=0){
			    			ArrayList al = emotion_map.get("negation");
			    			if(al.contains(linegroup[j-1].toLowerCase())){
			    				double num = emotion_level.get(key);
					    		emotion_level.put(key, num-1);
			    			}
			    			else {
			    				double num = emotion_level.get(key);
					    		emotion_level.put(key, num+1);
			    			}
			    		}
			    		else {
				    		double num = emotion_level.get(key);
				    		emotion_level.put(key, num+1);
			    		}
			    	}
			    }
			} 
		}
		
		Iterator iter_level = emotion_level.entrySet().iterator();
		String max = "normal";
		String min = null;
		double max_score = 0;
		double min_score = 0;
		while (iter_level.hasNext()) { 
			Map.Entry entry = (Map.Entry) iter_level.next(); 
			String key = (String) entry.getKey(); 
			double val =  (double) entry.getValue(); 
			if(val > max_score){
				max = key;
				max_score = val;
			}
			if(val < min_score){
				min = key;
				min_score = val;
			}
		}
		if(max.equals("normal") && min!=null)
			return "Not " + min;
		else 
			return max;
	}
}