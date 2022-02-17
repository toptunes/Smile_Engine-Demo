<?php
// should return $html_final

include "data_Hospital_child_menu.php";


$CPU_conn = new conn();

$CONe = $CPU_conn -> getDBready() ;




$all_hospitaljson = $CPU_conn -> read_sql("SELECT name_bimarestan FROM `m_marakez`") ;
$all_hospital =json_decode($all_hospitaljson);
foreach($all_hospital as $key => $val) {
    $key_all_hospital = $key_all_hospital."$key";
    foreach(((array)$all_hospital)[$key] as $val2) {
        $VALUE_all_hospital = $VALUE_all_hospital."<a onclick=\"feed_parents(this.innerHTML,'Hospitalname')\">$val2</a> ";
    }
}

$all_hospitaljson = $CPU_conn -> read_sql("SELECT ToolName FROM `tool_all`") ;
$all_hospital =json_decode($all_hospitaljson);
foreach($all_hospital as $key => $val) {
    $key_all_hospital = $key_all_hospital."$key";
    foreach(((array)$all_hospital)[$key] as $val2) {
        $VALUE_all_tools = $VALUE_all_tools."<a onclick=\"feed_parents(this.innerHTML,'Equipment_ToolName')\">$val2</a> ";
    }
}
$all_hospitaljson = $CPU_conn -> read_sql("SELECT ToolBrand FROM `brand_all`") ;
$all_hospital =json_decode($all_hospitaljson);
foreach($all_hospital as $key => $val) {
    $key_all_hospital = $key_all_hospital."$key";
    foreach(((array)$all_hospital)[$key] as $val2) {
        $VALUE_all_brands = $VALUE_all_brands."<a onclick=\"feed_parents(this.innerHTML,'Equipment_ToolName')\">$val2</a> ";
    }
}


$all_hospitaljson = $CPU_conn -> read_sql("SELECT ToolType FROM `ToolType_all`") ;
$all_hospital =json_decode($all_hospitaljson);
foreach($all_hospital as $key => $val) {
    $key_all_hospital = $key_all_hospital."$key";
    foreach(((array)$all_hospital)[$key] as $val2) {
        $VALUE_all_tool_type = $VALUE_all_tool_type."<a onclick=\"feed_parents(this.innerHTML,'Equipment_ToolName')\">$val2</a> ";
    }
}


 
$html_final = '<div class="cover" id="cover"></div>

<div class="mit_menu">
<h2>Insert Equipment Name</h2>

'.$data_Hospital_child_menu.'


<form class="rowv">



<div class="dropdown">
<input class="input_m_form" type="text" onfocus="drop_that_list(this.id)"  data-req="1" onfocusout="is_nes_fill_input(this.id)" onkeyup="filterFunction(this.id,this.id+\'list\',1)" id="Hospitalname" name="Hospitalname" autocomplete="off" placeholder="'.$read_t['data_Hospital'].'">
<div id="Hospitalnamelist" class="dropdown-content">

 '.$VALUE_all_hospital.'

  </div>
</div>


<div class="dropdown">
<input class="input_m_form" type="text"  onfocus="drop_that_list(this.id)"  data-req="1" onfocusout="is_nes_fill_input(this.id)" onkeyup="filterFunction(this.id,this.id+\'list\',1)" id="Equipment_ToolName" name="Equipment_ToolName" autocomplete="off" placeholder="'.$read_t['Equipment_ToolName'].'">
<div id="Equipment_ToolNamelist" class="dropdown-content">

 '.$VALUE_all_tools.'

  </div>
<span id="add_tool" data-query="add_tool" class="plus btn_id">+</span>

</div>


<div class="dropdown">
<input class="input_m_form" type="text"  onfocus="drop_that_list(this.id)"  data-req="1" onfocusout="is_nes_fill_input(this.id)" onkeyup="filterFunction(this.id,this.id+\'list\',1)" id="Equipment_ToolBrand" name="Equipment_ToolBrand" autocomplete="off" placeholder="'.$read_t['Equipment_ToolBrand'].'">
<div id="Equipment_ToolBrandlist" class="dropdown-content">

 '.$VALUE_all_brands.'

  </div>
<span id="add_brand" data-query="add_brand" class="plus btn_id">+</span>

</div>



<div class="dropdown">
<input class="input_m_form" type="text" data-req="1" onfocus="drop_that_list(this.id)"  data-req="1" onfocusout="is_nes_fill_input(this.id)" onkeyup="filterFunction(this.id,this.id+\'list\',1)"  id="Equipment_ToolType" name="Equipment_ToolType" autocomplete="off" placeholder="'.$read_t['Equipment_ToolType'].'">
<div id="Equipment_ToolTypelist" class="dropdown-content">

 '.$VALUE_all_tool_type.'

  </div>
<span id="add_tool_type" data-query="add_tool_type" class="plus btn_id">+</span>

</div>







<input class="input_m_form" data-jdp ata-jdp-min-date="1398/11/10" type="text" name="Equipment_ToolInstallationDate" autocomplete="off" placeholder="'.$read_t['Equipment_ToolInstallationDate'].'">
<input class="input_m_form" data-jdp type="text" ata-jdp-min-date="1398/11/10"  name="Equipment_ToolDepartureDate" autocomplete="off" placeholder="'.$read_t['Equipment_ToolDepartureDate'].'">

<div class="rowv">

<a  id="form_submit" data-query="insert_to_(hospital_Equipment)" data-msg="'.$read_t['data_fill_all'].'" class="blockdiv_leftside btn btn_id">submit</a>

</div>
</form>
</div>

';
?>