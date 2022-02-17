<?php
$valueof = $_GET['module_name'];


include 'fill/'.$valueof.'.php';




$html_final = fill('div',''.$valueof.'','
'.${$valueof}.'
');