<?php

set_time_limit(10);
/*
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1); 
*/

ini_set('display_errors', 1);

header('Content-Type: application/json');

include "../../../CPU/fn.php"; //Load functions

require "../../../autoload.php";

$out_put = new Final_render();

echo $out_put->export();



?>