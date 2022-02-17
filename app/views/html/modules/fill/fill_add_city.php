<?php

$dec = get_mysql("

SELECT * FROM `city_all` 

");


	
$fill_add_city = fill('div','fill_add_city',$dec);


?>