<?php


if($this->not_user == 1){

	$VALUE_all = '
	
	Hello Smile Engine

';
}else{
	$VALUE_all = '
	
	you are logged in ,Hello Smile Engine

';
}








$html_final= module('div','dash_page','

'.$VALUE_all.'


');











?>