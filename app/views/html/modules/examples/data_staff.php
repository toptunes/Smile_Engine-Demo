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

$all_hospitaljson = $CPU_conn -> read_sql("SELECT 	personPost FROM `person_post_hospital`") ;
$all_hospital =json_decode($all_hospitaljson);
foreach($all_hospital as $key => $val) {
    $key_personPost = $key_personPost."$key";
    foreach(((array)$all_hospital)[$key] as $val2) {
        $VALUE_staff_personPost = $VALUE_staff_personPost."<a onclick=\"feed_parents(this.innerHTML,'staff_personPost')\">$val2</a> ";
    }
}



$html_final = '<div class="cover" id="cover"></div>

<div class="mit_menu">
<h2>Insert staff Name</h2>

'.$data_Hospital_child_menu.'


<form class="rowv">



<div class="dropdown">
<input class="input_m_form" type="text" onfocus="drop_that_list(this.id)"  data-req="1" onfocusout="is_nes_fill_input(this.id)" onkeyup="filterFunction(this.id,this.id+\'list\',1)" id="Hospitalname" name="Hospitalname" autocomplete="off" placeholder="'.$read_t['data_Hospital'].'">
<div id="Hospitalnamelist" class="dropdown-content">

 '.$VALUE_all_hospital.'

  </div>
 
</div>




<input class="input_m_form" type="text" data-req="1" name="staff_FirstName" autocomplete="off" placeholder="'.$read_t['staff_FirstName'].'">
<input class="input_m_form" type="text" data-req="1" name="staff_LastName" autocomplete="off" placeholder="'.$read_t['staff_LastName'].'">



<div class="dropdown">
<input class="input_m_form" type="text" onfocus="drop_that_list(this.id)"  data-req="1" onfocusout="is_nes_fill_input(this.id)" onkeyup="filterFunction(this.id,this.id+\'list\',1)" id="staff_personPost" name="staff_personPost" autocomplete="off" placeholder="'.$read_t['staff_personPost'].'">
<div id="staff_personPostlist" class="dropdown-content">

 '.$VALUE_staff_personPost.'

  </div>
<span id="add_person_post_hospital" data-query="add_person_post_hospital" class="plus btn_id">+</span>
 </div>
 
 
 
 
 
 
 
 
 
<input class="input_m_form" type="text" data-req="1" name="staff_OfficePhoneNo" autocomplete="off" placeholder="'.$read_t['staff_OfficePhoneNo'].'">
<input class="input_m_form" data-jdp ata-jdp-min-date="1398/11/10" type="text" name="staff_StartDate" autocomplete="off" placeholder="'.$read_t['staff_StartDate'].'">
<input class="input_m_form" data-jdp type="text" ata-jdp-min-date="1398/11/10" data-msg="'.$read_t['data_fill_all'].'" name="staff_EndDate" autocomplete="off" placeholder="'.$read_t['staff_EndDate'].'">

<div class="rowv">

<a  id="form_submit" data-query="insert_to_(hospital_staff)" class="blockdiv_leftside btn btn_id">submit</a>

</div>
</form>
</div>

';
?>