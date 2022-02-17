<?php
$valueof = $_GET['module_name'];
$next = $_GET['next'];

include 'mini/'.$valueof.'.php';



$html_final = module('div','mini_'.$valueof.'','
'.${$valueof}.'
');

if($next !=""){
 include "$next.php";
}