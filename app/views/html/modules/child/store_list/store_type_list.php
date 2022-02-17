<?php
/*
on-it for active
*/
$id_of_store_type = get_value($_GET,'id');
$dec =get_value($_SESSION,'store_type');
if(get_value($_SESSION,'store_type') == ""){
$_SESSION['store_type'] =  json_decode(get_mysql("SELECT id,store_t_name FROM `store_type` "));
$dec =get_value($_SESSION,'store_type');	
}
$VALUE_all_store_type = "";
for($idx = 0; $idx <  count($dec); $idx++){ 
    $obj_all_store_type = (Array)$dec[$idx];
	
if($id_of_store_type == $obj_all_store_type['id'] || $_q1 == $obj_all_store_type['id']){
$on_it = "on-it";
}else{
$on_it = "";	
}
	
$VALUE_all_store_type .='
<a href="/store_list/'.$obj_all_store_type['id'].'" id="store_list" data-query="store_list/'.$obj_all_store_type['id'].'&what_store='.$obj_all_store_type['store_t_name'].'&id='.$obj_all_store_type['id'].'"  class="col-6 col-md-12 col-lg-12 btn_id">
<li class="typeofstore-child list-group-item '.$on_it.'">'.$obj_all_store_type['store_t_name'].'</li></a>
';
 
}



$child_store_list_store_type_list = child('div','child_store_list_store_type_list','
'.$VALUE_all_store_type.'
');
