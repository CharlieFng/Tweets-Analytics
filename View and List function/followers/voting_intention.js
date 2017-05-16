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
function check(text,array,name){
  for(i in array){
    if(text.toLowerCase().indexOf(array[i].toLowerCase()) != -1){
      emit(name,1);
    }
  }
}
function(doc){
  //These arrays are parties' and politicians' twitter id and full name or key words.
  var laborArray = ["@AustralianLabor","labor","Anthony Byrne","@AnthonyByrne_MP","Lisa Chesters","@LMChesters",
"David Feeney","@Feeney4Batman","Andrew Giles","@andrewjgiles","Catherine King","@CatherineKingMP",
"Richard Marles","@RichardMarlesMP","Rob Mitchell","@RobMitchellMP","Clare O'Nei","@ClareONeilMP",
"Joanne Ryan","@JoanneRyanLalor","Bill Shorten","@billshortenmp","Kelvin Thomson","@KelvinThomsonMP",
"Maria Vamvakinou","@MariaVamvakinou","Tim Watts","@TimWattsMP"];
  var liberalArray = ["@LiberalAus","liberal","Kevin Andrews","@kevinandrewsmp","Bruce Billson","@BruceBillsonMP",
"Josh Frydenberg","@JoshFrydenberg","Sarah Henderson","@SHendersonMP","Greg Hunt","@GregHuntMP",
"Kelly O'Dwyer","@KellyODwyer","Andrew Robb","@AndrewRobbMP","Tony Smith","@TonySmithMP",
"Sharman Stone","@SharmanStone","Dan Tehan","@DanTehanWannon","Alan Tudge","@AlanTudgeMP",
"Jason Wood","@JasonWood_MP"];
  var greensArray = ["@Greens","greens","Adam Bandt","@AdamBandt"];
  var indiArray = ["@independentaus","independent","Cathy McGowan","@Indigocathy"];
  var natiArray = ["@The_Nationals","nationals","Andrew Broad","@broad4mallee","Darren Chester",
"@DarrenChesterMP"];

  var text = doc.status.text;

  if(doc.emotion2 == "positive"){
    check(text,laborArray,"Australian Labor Party");
    check(text,liberalArray.concat(natiArray),"Liberal-Nationals Coalition");
    check(text,greensArray,"Greens");
    check(text,indiArray,"Independent");
  }
}

//Reduce Function
_sum
