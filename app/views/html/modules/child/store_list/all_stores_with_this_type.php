<?php
/*
on-it for active
*/

if($what_store != ""){
$query_f = "store_t_name = '$what_store'";	
}else{
$query_f = "store_t_name != '' ";	
}

$final_query = "SELECT id,img_0,store_name FROM `users` where $query_f ";

if($_q1 != ""){
	
$final_query = "
SELECT users.id,users.img_0,users.store_name
FROM `users` 
INNER JOIN `store_type` ON  store_type.id = $_q1  WHERE store_type.store_t_name = users.store_t_name
";

}

$dec =json_decode(get_mysql($final_query));

$VALUE_all_store_type = "";
for($idx = 0; $idx <  count($dec); $idx++){ 
    $obj_all_store = (Array)$dec[$idx];
	
$VALUE_all_store_type .='
<div class="col-6 col-md-4 col-lg-3 d-flex flex-column align-items-center my-3 border py-3">
<a href="/store/'.$obj_all_store['id'].'" id="store" data-query="store/'.$obj_all_store['id'].'" class="btn_id" at-end="scroll_top">
<img src="/upload/image/show.php?name='.$obj_all_store['img_0'].'&width=125" alt="profile-of-store" class="rounded-circle wf-55 border obj_fit_c" width="250" >
</a>
<div class="name-of-store">'.$obj_all_store['store_name'].'</div>
</div>
';
 
}



$child_store_list_all_stores_with_this_type = child('div','child_store_list_all_stores_with_this_type','
'.$VALUE_all_store_type.'
');
