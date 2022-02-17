<?php
$Access_p=Access_permission("2",$this->user_level,$this->not_user);
$product_id = $_GET['product_id'];

include "child/add_products/edit/edit_texts.php";


$html_final = module('div','edit_product','


'.$child_add_products_edit_edit_texts.'


');
?>