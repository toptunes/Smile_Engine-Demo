<?php
$Access_p=Access_permission("3",$this->user_level,$this->not_user);

$valueof = $_GET['module_name'];

include 'admin/'.$valueof.'.php';



$html_final = module('div',''.$valueof.'',${$valueof});