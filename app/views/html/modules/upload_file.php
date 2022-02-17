<?php
$Access_p=Access_permission("1",$this->user_level,$this->not_user);


include "child/child_upload.php";


$html_final = module('div','upload_file','
 

'.$child_upload.'


');
?>