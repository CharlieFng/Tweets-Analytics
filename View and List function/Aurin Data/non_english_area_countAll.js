/*
 * Team 18
 * Victoria
 * Yao Pan             777241
 * Min-Ying Chen       779101
 * Jinfeng Zhang       755121
 * Siyu Feng           745399
 * Lianyu Zeng         733863
*/

//Map Function
function(doc){
  for(i in doc){
    if(i != "_id" && i != "_rev" && i != "area_name" && i != "total_population" &&
       i.indexOf("_per") == -1){
         emit(i, doc[i]);
       }
    }
}

//Reduce Function
_sum
