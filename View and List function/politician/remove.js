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
  if(!unique[id]){
    unique[id] = 1
  }
  else{
        emit(doc._id,doc._rev);
  }
}
