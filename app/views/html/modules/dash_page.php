<?php


include "child/header/child_header_modal.php";

include 'home_page_not_login.php';
include 'home_page_with_login.php';
include 'products_list.php';

if($this->not_user == 1){

	$VALUE_all = '
	
'.$home_page_not_login.'

';
}else{
	$VALUE_all = '
	
'.$home_page_with_login.'

';
}








$html_final= module('div','dash_page','


'.$VALUE_all.'



');











?>