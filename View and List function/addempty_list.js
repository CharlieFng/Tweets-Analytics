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
function getData(row, time, emotion){
  var data = new Object;
  data.key = [row.key[0],time,emotion,row.key[3]];
  data.value = 0;
  return data;
}

function(head, req){
  var row;
  var rows = [];
  var indexT = 0;
  var indexE = 0;
  while(row = getRow()){

    if(indexT == 0 && row.key[1] == 'Morning'){
      rows.push(getData(row,'Afternoon','normal'));
      rows.push(getData(row,'Afternoon','positive'));
      rows.push(getData(row,'Afternoon','negative'));
      indexT = 1;
    }
    if(indexT == 0 && row.key[1] == 'Night'){
      rows.push(getData(row,'Afternoon','normal'));
      rows.push(getData(row,'Afternoon','positive'));
      rows.push(getData(row,'Afternoon','negative'));
      rows.push(getData(row,'Morning','normal'));
      rows.push(getData(row,'Morning','positive'));
      rows.push(getData(row,'Morning','negative'));
      indexT = 2;
    }
    if(indexT == 1 && row.key[1] == 'Night'){
      rows.push(getData(row,'Morning','normal'));
      rows.push(getData(row,'Morning','positive'));
      rows.push(getData(row,'Morning','negative'));
      indexT = 2;
    }

    if(indexE == 0 && row.key[2] == 'negative'){
      rows.push(row);
      indexE += 1;
      continue;
    }
    if(indexE == 0 && row.key[2] == 'normal'){
      rows.push(getData(row,row.key[1],'negative'));
      rows.push(row);
      indexE += 2;
      continue;
      }
    if(indexE == 0 && row.key[2] == 'positive'){
      rows.push(getData(row,row.key[1],'negative'));
      rows.push(getData(row,row.key[1],'normal'));
      rows.push(row);
      indexE = 0;
      if(row.key[1] == 'Night'){
        indexT = 0;
      }
      else{
        indexT += 1;
      }
      continue;
    }
    if(indexE == 1 && row.key[2] == 'normal'){
      rows.push(row);
      indexE += 1;
      continue;
    }
    if(indexE == 1 && row.key[2] == 'positive'){
      rows.push(getData(row,row.key[1],'normal'));
      rows.push(row);
      indexE = 0;
      if(row.key[1] == 'Night'){
        indexT = 0;
      }
      else{
        indexT += 1;
      }
      continue;
    }
    if(indexE == 2 && row.key[2] == 'positive' && rows.slice(-1)[0].key[1] == row.key[1]){
      rows.push(row);
      indexE = 0;
      if(row.key[1] == 'Night'){
        indexT = 0;
      }
      else{
        indexT += 1;
      }
      continue;
    }
    if(indexE == 2 && (row.key[2] != 'positive' || rows.slice(-1)[0].key[1] != row.key[1])){
      rows.push(getData(row,row.key[1],'positive'));
      indexE = 0;
      if(row.key[1] == 'Night'){
        indexT = 0;
      }
      else{
        indexT += 1;
      }
      continue;
    }
  }
  send(JSON.stringify(rows,null,4));
}
