<?php

$nameee = get_value($_GET,'name');

$obj = (Array)json_decode(get_mysql("

SELECT * FROM `specifications_kinds` WHERE `specification_name` LIKE '$nameee'

"))[0];

$vals = get_value($obj,"specifications_value");

include "specifications_tools/$vals.php";

$string_val_name = 'tools_'.$vals;

$child_specifications_made= child('div','child_specifications_made','

'.${$string_val_name}.'

');


?>