<?php



$module_name = "example";

Routing::Set_routing_head_inside($module_name,'

title of page

');



Routing::Set_routing_head_inside($module_name.'_description','

description of page

');



Routing::Set_routing_head_inside($module_name.'_author','

author


');


$json="
HELLO FROM example.php
";

$html_final= module('div','example',$json);

?>