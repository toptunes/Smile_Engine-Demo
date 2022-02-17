<?php
include "./switcher/open_inside_routing.php";

$valueof = $_GET['module_name'];
$valueof2 = $o_inside_t[''.$valueof.''];

include "$valueof2.php";
$valueof = str_replace("/","_",$valueof2);


$html_final = module('div',''.$valueof.'','

'.${$valueof}.'
');