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
function (doc) {
    var text = doc.status.text+ " ";
    text = text.replace(/@\w*\W/g,"").replace(/#\w*\W/g,"").replace(
      /RT /g,"").replace(/http.+/g,"").replace(
      /[-\[\],<>.?/~`!$%‐^&*()_–…‘’+={}“”|\\":;/\d]/g,"").replace(/'/g," ");
    wordsList = text.toLowerCase().trim().split(/\s+/);
    for(i in wordsList){
      emit(wordsList[i], 1);
    }
}

//Reduce Function
_sum
