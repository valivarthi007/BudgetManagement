function showCat(){
  //var divs = ["Category","TStaff","ESTB","OTC"];
  //var x;
  //for(x in divs){
    var s = document.getElementById("Category");
    var t = s.value;
    for(i=1;i<s.length;i++){
      if(s.options[i].value==t){
          document.getElementById(s.options[i].value).style.display="block";
      }
      else{
          document.getElementById(s.options[i].value).style.display="none";
      }
    }
  }
//}
function showTS(){
  var s = document.getElementById("TStaff");
    var t = s.value;
    for(i=1;i<s.length;i++){
      if(s.options[i].value==t){
          document.getElementById(s.options[i].value).style.display="block";
      }
      else{
        document.getElementById(s.options[i].value).style.display="none";
    }
  }
}
function showEstb(){
  var s = document.getElementById("ESTB");
    var t = s.value;
    for(i=1;i<s.length;i++){
      if(s.options[i].value==t){
          document.getElementById(s.options[i].value).style.display="block";
      }
      else{
        document.getElementById(s.options[i].value).style.display="none";
    }
  }
}
function showOtc(){
  var s = document.getElementById("OTC");
    var t = s.value;
    for(i=1;i<s.length;i++){
      if(s.options[i].value==t){
          document.getElementById(s.options[i].value).style.display="block";
      }
      else{
        document.getElementById(s.options[i].value).style.display="none";
    }
  }
}