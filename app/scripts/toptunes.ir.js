



function getvaluefrominput(idname) {

var textcontent;
var e = document.getElementById(idname);

textcontent = e.value;
      

return textcontent;
}

function edit_box_category(param1,param2) {

value_to_innertext('inbox'+param1,'editd'+param2);
value_to_innertext('inbox_2'+param1,'editd_2'+param2);
}
