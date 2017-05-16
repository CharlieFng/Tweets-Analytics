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
     if (doc.status.lang != "en" && doc.status.lang != "und") {
        emit (doc.status.lang ,1);
     }
}

//Reduce Function
_sum
