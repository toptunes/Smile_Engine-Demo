<?php
// should return $html_final

include "data_Hospital_child_menu.php";



$CPU_conn = new conn();
$CONe = $CPU_conn -> getDBready() ;
$all_Cityjson = $CPU_conn -> read_sql("SELECT city_name FROM `city_all`") ;
$all_City =json_decode($all_Cityjson);
foreach($all_City as $key => $val) {
    $key_all_City = $key_all_City."$key";
    foreach(((array)$all_City)[$key] as $val2) {
        $VALUE_all_City = $VALUE_all_City."<a onclick=\"feed_parents(this.innerHTML,'HospitalCity')\">$val2</a> ";
    }
}


$all_provincejson = $CPU_conn -> read_sql("SELECT province_name FROM `province_all`") ;
$all_province =json_decode($all_provincejson);
foreach($all_province as $key => $val) {
    $key_all_province = $key_all_province."$key";
    foreach(((array)$all_province)[$key] as $val2) {
        $VALUE_all_province = $VALUE_all_province."<a onclick=\"feed_parents(this.innerHTML,'Hospitalprovince')\">$val2</a> ";
    }
}

$all_provincejson = $CPU_conn ->  read_sql("SELECT Hospital_Type FROM `Hospital_Type`") ;
$all_province =json_decode($all_provincejson);
foreach($all_province as $key => $val) {
    $key_all_TYPE = $key_all_TYPE."$key";
    foreach(((array)$all_province)[$key] as $val2) {
        $VALUE_all_TYPE = $VALUE_all_TYPE."<a onclick=\"feed_parents(this.innerHTML,'HospitalType')\">$val2</a> ";
    }
}

$html_final = '<div class="cover" id="cover"></div>

<div class="mit_menu">
<h2>Insert hospital Name</h2>

'.$data_Hospital_child_menu.'
<div class="rowv">
<form>

<input class="input_m_form" type="text" name="Hospitalname"  data-req="1" autocomplete="off" placeholder="'.$read_t['data_Hospitalname'].'">






<div class="dropdown">
<input class="input_m_form" type="text" onfocus="drop_that_list(this.id)"   data-req="1" onfocusout="is_nes_fill_input(this.id)" onkeyup="filterFunction(this.id,this.id+\'list\',1)" id="Hospitalprovince" name="Hospitalprovince" autocomplete="off" placeholder="'.$read_t['data_Hospitalprovince'].'">
<div id="Hospitalprovincelist" class="dropdown-content">

'.$VALUE_all_province.'
  </div>
<span id="add_province" data-query="add_province" class="plus btn_id">+</span>
</div>


<div class="dropdown">
<input class="input_m_form" type="text" onfocus="drop_that_list(this.id)"  data-req="1" onfocusout="is_nes_fill_input(this.id)" onkeyup="filterFunction(this.id,this.id+\'list\',1)" id="HospitalCity" name="HospitalCity" autocomplete="off" placeholder="'.$read_t['data_HospitalCity'].'">
<div id="HospitalCitylist" class="dropdown-content">
'.$VALUE_all_City.'
  </div>
<span id="add_City" data-query="add_City" class="plus btn_id">+</span>
</div>




<div class="dropdown">
<input class="input_m_form" type="text" onfocus="drop_that_list(this.id)"  data-req="1" onfocusout="is_nes_fill_input(this.id)" onkeyup="filterFunction(this.id,this.id+\'list\',1)"  id="HospitalType" name="HospitalType" autocomplete="off"  placeholder="Type">
<div id="HospitalTypelist" class="dropdown-content">
'.$VALUE_all_TYPE.'
  </div>
<span id="add_Hospital_Type" data-query="add_Hospital_Type" class="plus btn_id">+</span>

</div>


<input class="input_m_form" type="text" name="HospitalSize"  data-req="1" autocomplete="off" placeholder="Size">
<input class="input_m_form" type="text" name="FieldActivity"  data-req="1" autocomplete="off" placeholder="Field Activities">
<input class="input_m_form" type="text" name="OrthopedistsNumber"  data-req="1" autocomplete="off" placeholder="Orthopedists Number">
<input class="input_m_form" type="text" name="LaparoscopistsNumber"  data-req="1" autocomplete="off" placeholder="Laparoscopists Number">
<input class="input_m_form" type="text" name="Needs" autocomplete="off"  data-req="1" placeholder="Needs">
<div class="rowv">

<a  id="form_submit" data-query="insert_to_(hospital_name)"  data-msg="'.$read_t['data_fill_all'].'" class="blockdiv_leftside btn btn_id">submit</a>

</div>
</form>
</div>



</div>

';
?>