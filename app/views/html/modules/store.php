<?php
$what_store= get_value($_GET,'what_store');

include "child/store_list/pagination.php";
include "child/store_list/store_products.php";

$html_final = module('div','store','



'.$child_store_list_store_products.'
	
	');