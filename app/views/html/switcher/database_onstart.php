<?php
$dbox = "";

/*
$dbox .= get_sql_onstart("users","
SELECT f_name,img_0,level,l_name,users_id,store_name,store_t_name FROM `users` WHERE username= '".$_SESSION["username"]."' AND password_hash ='".$_SESSION["password"]."' 
");
*/
/*
$dbox .= get_sql_onstart("city_all","
SELECT * FROM `city_all` 
");*/

$_SESSION['store_type'] =  json_decode(get_mysql("SELECT id,store_t_name FROM `store_type` "));







