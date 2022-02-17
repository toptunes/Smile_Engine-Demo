<?php
$valueof = $_GET['module_name'];

include 'child/'.$valueof.'.php';


$html_final = module('div',''.$valueof.'','

'.${$valueof}.'
');