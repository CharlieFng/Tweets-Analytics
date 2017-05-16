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
var week_count = [0,0,0,0,0,0,0];
var final_rows = [];
const dayOfWeek = ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];

function pushAndReset(row){
  while(i < 7){
    var data = new Object;
    data.key = [row.key[0],dayOfWeek[i]];
    data.value = week_count[i];
    final_rows.push(data);
    i += 1;
  }
  while(j < 7){
    week_count[j] = 0;
    j += 1;
  }
}
function checkWeek(row){
  switch (row.key[2]) {
    case dayOfWeek[0]:
      week_count[0] += row.value;
      break;
    case dayOfWeek[1]:
      week_count[1] += row.value;
      break;
    case dayOfWeek[2]:
      week_count[2] += row.value;
      break;
    case dayOfWeek[3]:
      week_count[3] += row.value;
      break;
    case dayOfWeek[4]:
      week_count[4] += row.value;
      break;
    case dayOfWeek[5]:
      week_count[5] += row.value;
      break;
    case dayOfWeek[6]:
      week_count[6] += row.value;
      break;

    default:
  }
}

function checkEmotion(row,nextEmotion,emotion){
  if(row.key[0] == emotion){
    checkWeek(row);
    if(nextEmotion != emotion){
      pushAndReset(row);
    }
  }
}

function(head, req){
  var row;
  var rows = [];
  var count;
  while(row = getRow()) {
    rows.push(row);
  }
  for(i in rows){
    checkEmotion(rows[i],rows[i+1].key[0],'negative');
    checkEmotion(rows[i],rows[i+1].key[0],'normal');
    if(i < rows.length - 1){
      checkEmotion(rows[i],rows[i+1].key[0],'positive');
    }
    if(i = rows.length - 1){
      checkEmotion(rows[i],null,'positive');
    }
  }
  send(JSON.stringify(final_rows,null,4));
}
