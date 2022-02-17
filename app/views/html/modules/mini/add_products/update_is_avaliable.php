<?php
$id_of = $_GET['when'];


$obj = (Array)json_decode(get_mysql("

SELECT available FROM `products` where users_id = '$this->user_id' and id = '$id_of' 

"))[0];

$available = $obj['available'];
if($available == 0){
$available_do = 1;	
}
if($available == 1){
$available_do = 0;	
}

$obj = (Array)json_decode(get_mysql("

update  `products` set available = '$available_do' where users_id = '$this->user_id' and id = '$id_of'  

"))[0];