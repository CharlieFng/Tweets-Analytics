/*
 * Team 18
 * Victoria
 * Yao Pan             777241
 * Min-Ying Chen       779101
 * Jinfeng Zhang       755121
 * Siyu Feng           745399
 * Lianyu Zeng         733863
*/

//List Function
function(head, req){
  var row;
  var rows=[];
  while(row = getRow()) {
    rows.push(row);
  }
  rows.sort(function(a,b){return b.value-a.value;});
  // The number of sorting values is determined by i.
  // In this example, only Top 10 values are listed.
  for(i = 0; i < 10; i++){
    send(JSON.stringify(rows[i],null,4));
  }
}
