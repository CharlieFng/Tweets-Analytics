/*
 * Team 18
 * Victoria
 * Yao Pan             777241
 * Min-Ying Chen       779101
 * Jinfeng Zhang       755121
 * Siyu Feng           745399
 * Lianyu Zeng         733863
*/

// Removing duplicates of politician's followers' tweets
// This view will emit duplicates' id and revision, then delete these data by Java.

//Map Function
var unique = {};

function (doc) {
  var id = doc.status.id;
  var name = doc.fName;
  if(!unique[id]){
    unique[id] = [];
    unique[id].push(name);
  }
  else{
    for(i in unique[id]){
      if(unique[id][i] == name){
        emit(doc._id,doc._rev);
        break;
      }
      if(i == unique[id].length - 1){
        unique[id].push(name);
      }
    }
  }
}
