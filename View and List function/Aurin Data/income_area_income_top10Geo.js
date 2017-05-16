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
//locationArray is obtained from followers' database byCity_location.
//Top 10 suburbs in Victoria with corresponding format
var locationArray = ["Melbourne","Southbank", "Richmond (Vic.)", "Carlton (Vic.)",
"South Wharf","Docklands","Armadale (Vic.)","Traralgon","East Melbourne","Whittington"]

function(doc) {
  for(i in locationArray){
    if(doc.area == locationArray[i]){
      emit(doc.area, doc.income);
    }
  }
}
