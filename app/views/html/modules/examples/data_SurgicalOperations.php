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

$all_hospitaljson = $CPU_conn -> read_sql("SELECT Type FROM `j_ammals_t`") ;
$all_hospital =json_decode($all_hospitaljson);
foreach($all_hospital as $key => $val) {
    $key_all_hospital = $key_all_hospital."$key";
    foreach(((array)$all_hospital)[$key] as $val2) {
        $VALUE_all_SurgicalOperations_Type = $VALUE_all_SurgicalOperations_Type."<a onclick=\"feed_parents(this.innerHTML,'Hospitalname')\">$val2</a> ";
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


$html_final = '<div class="cover" id="cover"></div>

<div class="mit_menu">
<h2>Insert SurgicalOperations Name</h2>

'.$data_Hospital_child_menu.'


<form class="rowv">



<div class="dropdown">
<input class="input_m_form" type="text" onfocus="drop_that_list(this.id)"  data-req="1" onfocusout="is_nes_fill_input(this.id)" onkeyup="filterFunction(this.id,this.id+\'list\',1)" id="Hospitalname" name="Hospitalname" autocomplete="off" placeholder="'.$read_t['data_Hospital'].'">
<div id="Hospitalnamelist" class="dropdown-content">

 '.$VALUE_all_hospital.'

  </div>
</div>


<div class="dropdown">
<input class="input_m_form" type="text" data-req="1" id="SurgicalOperations_Type" name="SurgicalOperations_Type" onfocus="drop_that_list(this.id)"  data-req="1" onfocusout="is_nes_fill_input(this.id)" onkeyup="filterFunction(this.id,this.id+\'list\',1)" autocomplete="off" placeholder="'.$read_t['SurgicalOperations_Type'].'">
<div id="SurgicalOperations_Typelist" class="dropdown-content">

 '.$VALUE_all_SurgicalOperations_Type.'

  </div>
<span id="add_SurgicalOperations_Type" data-query="add_SurgicalOperations_Type" class="plus btn_id">+</span>

</div>


<input class="input_m_form" type="text" data-req="1" name="SurgicalOperations_Averagenumberoperationsmonth" autocomplete="off" placeholder="'.$read_t['SurgicalOperations_Averagenumberoperationsmonth'].'">



<div class="dropdown">
<input class="input_m_form" type="text"  onfocus="drop_that_list(this.id)"  data-req="1" onfocusout="is_nes_fill_input(this.id)" onkeyup="filterFunction(this.id,this.id+\'list\',1)" id="SurgicalOperations_Brands" name="SurgicalOperations_Brands" autocomplete="off" placeholder="'.$read_t['SurgicalOperations_Brands'].'">
<div id="SurgicalOperations_Brandslist" class="dropdown-content">

 '.$VALUE_all_brands.'

  </div>
<span id="add_brand" data-query="add_brand" class="plus btn_id">+</span>

</div>








<input class="input_m_form" data-jdp ata-jdp-min-date="1398/11/10" type="text" name="SurgicalOperations_RegistrationDate" autocomplete="off" placeholder="'.$read_t['SurgicalOperations_RegistrationDate'].'">

<div class="rowv">

<a  id="form_submit" data-query="insert_to_(hospital_SurgicalOperations)" data-msg="'.$read_t['data_fill_all'].'" class="blockdiv_leftside btn btn_id">submit</a>

</div>
</form>
</div>

';
?>