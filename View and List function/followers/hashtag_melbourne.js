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
       if (doc.status.hashtagEntities){
           for (i in doc.status.hashtagEntities){
               emit(doc.status.hashtagEntities[i].text,1);
           }
       }
    }
}

//Reduce Function
_sum
