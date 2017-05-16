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
    if (doc.city == "Melbourne") {
       if (doc.status.userMentionEntities){
           for (i in doc.status.userMentionEntities){
               emit(doc.status.userMentionEntities[i].screenName,1);
           }
       }
    }
}

//Reduce Function
_sum
