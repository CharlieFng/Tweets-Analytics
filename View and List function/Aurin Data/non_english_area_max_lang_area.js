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
function(doc) {
  var max_value = ["",0];
  for(x in doc){
    if(x != '_id' && x != 'rev' && x != 'total_population' && x != 'area_name'){
      if(doc[x] > max_value[1]){
        max_value = [x.toString(),doc[x]];
      }
    }
  }
  emit(doc.area_name, max_value[0]);
}
