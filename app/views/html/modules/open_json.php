<?php
$valueof = $_GET['module_name'];

include 'json/'.$valueof.'.php';


$html_final = fill('div',''.$valueof.'',${$valueof});