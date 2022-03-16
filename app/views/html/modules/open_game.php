<?php
$valueof = $_GET['module_name'];

include 'game/'.$valueof.'.php';


$html_final = module('div',''.$valueof.'','

'.${$valueof}.'
');