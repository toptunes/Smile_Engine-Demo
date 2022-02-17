<?php
/*
$sql = $_GET['sql'];

if($sql == 1){
$sql = "

(SELECT * FROM `products` where active = 1 ORDER BY `id` DESC limit 0 , 10)
 UNION 
(SELECT * FROM `products` where active = 0 ORDER BY `id` DESC limit 0 , 10)

";	
}

*/

$json1 = get_mysql("

SELECT * FROM `products` where active = 1  ORDER BY `id` DESC limit 0 , 7;



");

$json2 = get_mysql("

SELECT * FROM `products`   ORDER BY `products`.`product_real_price` ASC limit 0 , 7


");
$json3 = get_mysql("


SELECT * FROM `products`   ORDER BY `products`.`product_takhfif` DESC limit 0 , 7





");
/*
SELECT *
FROM products where active = 1 

UNION

SELECT *
FROM products where active = 0 


ORDER BY `id` DESC limit 0 , 10;
*/
/*
$replaces = array("category" => "cat", "Consumer" => "cons");
$json_data = json_decode($json1, true);
replace($json_data, $replaces);
$json1 = json_encode($json_data)
*/
	
	
$fill_products_list = fill('div','fill_products_list',
"$json1>/<$json2>/<$json3"
);


?>




