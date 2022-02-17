<?php

if($_GET['restore'] ==""){
	$nammg = 1;
$msg = "حذف شد";
}else{
	$nammg = 0;
$msg = "بازگردانی شد";	
}
$obj = (Array)json_decode(get_mysql("

UPDATE `category_all` SET `deleted` = '$nammg' WHERE `category_all`.`id` = ".$_GET['when']."

"))[0];

$child_delete_category= child('div','child_delete_category','
<div class="col-md-4 offset-md-4">
'.$_GET['name'].' '.$msg.'
<Br>
اشتباه حذف کردی؟
<Br>
<a href="#2rditbox'.$_GET['when'].'" id="open_child"  data-query="open_child&module_name=child_delete_category&when='.$_GET['when'].'&name='.$_GET['name'].'&restore=1" class="profile-login btn_id">بازگردانی '.$_GET['name'].'</a>
</div>
');


?>