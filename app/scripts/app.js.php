<?php
header("Content-Type: application/javascript");
header('Pragma: public');
header('Cache-Control: max-age=386400');
header('Expires: '. gmdate('D, d M Y H:i:s \G\M\T', time() + 386400));




ob_start();
include "js.php";
$appjs = ob_get_clean();
$appjs= str_replace("view.html", "mohammad_norouzi_app.php", $appjs);
$appjs= str_replace("view.html", "mohammad_norouzi_app.php", $appjs);

echo $appjs;












ob_start();
include "js_user.php";
$js_user = ob_get_clean();

echo $js_user;

?>

function getvaluefrominput(idname) {
var msgbox;

var textcontent;
var e = document.getElementById(idname);

textcontent = e.value;
msgbox=e.placeholder;

if (!textcontent){

document.getElementById("dear_app").innerHTML = "  &#1066;&#1031;&#1064;&#1030;&#1067;&#1034;&#1065;†&#1065;‡  "+msgbox+"  &#1064;±&#1064;§ &#1065;&#1026;&#1064;§&#1064;±&#1064;&#1031; &#1066;©&#1065;†&#1067;&#1034;&#1064;&#1031; ";

app.setVar('run_executer', '0');
}else{

app.setVar('run_executer', '1');
}

return textcontent;

}


function showthisfromid(idname) {

document.getElementById(idname).style.display = "block";

}



function if_hide_show(elementid){

  var x = document.getElementById(elementid);
  if (window.getComputedStyle(x).display === "none") {
      x.style.display = "block";
  } 

}
function if_show_hide(elementid){

  var x = document.getElementById(elementid);
  
  if (x.style.display === "block") {
    x.style.display = "none";
    
  }

}





function findGetParameter(parameterName) {
    var result = null,
        tmp = [];
    var items = location.search.substr(1).split("&");
    for (var index = 0; index < items.length; index++) {
        tmp = items[index].split("=");
        if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
    }
    return result;
}





function dashboard_home(param) {
// number 1
app.setVar('run_executer', '1');
app.get_https("plt.php"+"?q="+param);


}












function data_items(param) {


alert(param);

}







function readFile(input) {
  let file = input.files[0];
var vagr;
if ( /\.(jpe?g|png|gif)$/i.test(file.name)  &&  file.size < 5000001) {
  let reader = new FileReader();

  reader.readAsText(file);

  reader.onload = function() {
    vagr = encodeURIComponent(reader.result);
    
console.log(vagr);

  };

  reader.onerror = function() {
    vagr = reader.error;

  };
}else{

    vagr ="file or format problem";
console.log(vagr);
}

  return vagr;
}

function getSecondPart(str) {
    return str.split('-')[1];
}

function form_submit(formname) {

gather_form(formname,arguments.callee.name);
}

function funca(){
        jalaliDatepicker.startWatch({
            separatorChar: "/",
            minDate: "attr",
            maxDate: "attr",
            changeMonthRotateYear: true,
            showTodayBtn: true,
            showEmptyBtn: true
        });
     }

