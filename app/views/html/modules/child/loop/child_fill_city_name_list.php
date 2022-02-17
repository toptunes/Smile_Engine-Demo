<?php

$dec = get_mysql("

SELECT * FROM `city_all` 

");


	
$child_fill_city_name_list = child('div','child_fill_city_name_list','
<db>'.$dec.'</db>
');


?>