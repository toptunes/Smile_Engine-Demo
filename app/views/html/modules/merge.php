<?php
$Access_p=Access_permission("1",$this->user_level,$this->not_user);


$obj = (Array)json_decode(get_mysql("SELECT * FROM `users`"))[0];





$html_final = module('div','merge','




'.$obj["id"].'
<br>
'.$obj["username"].'

');

?>
