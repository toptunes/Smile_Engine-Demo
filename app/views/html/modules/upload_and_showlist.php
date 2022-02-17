<?php
$Access_p=Access_permission("1",$this->user_level,$this->not_user);

include  "calc/show_upload_list.php";
include "child/child_upload.php";


$html_final = module('div','upload_and_showlist','
 

'.$child_upload.'
 '.$upload_and_showlist_all.'
   
  




');
?>