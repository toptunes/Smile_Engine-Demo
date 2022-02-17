<?php
$current_page = 0;
$maghsood=0;
$iz=0;
$p_link_c=0;
$lin_c_p = "";
$iz2 = 0;
$prev_p = 0;
$next_p = 0;
$page_x=0;
$data_pagination_products_list="";

$page_x = get_value($_GET,'page');
if($page_x == ""){
$page_x = 0;	
}

$obj = (Array)json_decode(get_mysql("
SELECT count(*) as total from products WHERE users_id = '$this->user_id'
"))[0];
$total_row_add_products = get_value($obj,'total');	
$current_page = $page_x;


$p_link_c = ceil($total_row_add_products/10);

if($p_link_c > 0 && $p_link_c < 20){

for($iz = 1; $iz <  $p_link_c; $iz++){ 
$iz2 = $iz+1;
if($iz ==$current_page){
 	$activve = "active";
}else{
 	$activve = "";
}
$lin_c_p .= '<li class="page-item '.$activve.'"><a class="page-link btn_id" href="/add_product" id="add_product" data-query="add_product&page='.$iz.'&tab=2" >'.$iz2.'</a></li>'; 
}

}


if($p_link_c > 20 ){
$maghsood = $current_page+10;
if($maghsood>$p_link_c){
$maghsood = $p_link_c;
}
for($iz = $current_page-10; $iz <  $maghsood; $iz++){ 
$iz2 = $iz+1;
if($iz ==$current_page){
	$activve = "active";
}else{
		$activve = "";
}
	if($iz > 0){
$lin_c_p .= '<li class="page-item '.$activve.'"><a class="page-link btn_id" href="/add_product" id="add_product" data-query="add_product&page='.$iz.'&tab=2" >'.$iz2.'</a></li>'; 
}
}

	
}







$prev_p = $page_x-1;
$next_p = $page_x+1;
if($next_p >= $p_link_c){
$disable_next = "disabled";
}else{
$disable_next = "";	
}

if($prev_p < 0){
$disable_prev = "disabled";
}else{
$disable_prev = "";	
}
if($page_x == 0){
	$activve_r = "active";
}else{
		$activve_r = "";

}

if($p_link_c > 1){
	$data_pagination_products_list = '  

	<div class="row c_box text-xs-center">

<nav aria-label="align-content-center">
  <ul class="pagination flex-wrap justify-content-center px-2">
<li class="page-item '.$disable_prev.'"><a class="page-link btn_id" href="/add_product" id="add_product" data-query="add_product&page='.$prev_p.'&tab=2" >قبلی</a></li>
<li class="page-item '.$activve_r.'"><a class="page-link btn_id" href="/add_product" id="add_product" data-query="add_product&page=0&tab=2" >1</a></li>
'.$lin_c_p.'

    <li class="page-item '.$disable_next.'"><a class="page-link btn_id" href="/add_product" id="add_product" data-query="add_product&page='.$next_p.'&tab=2" >بعدی</a></li>
  </ul>
</nav>
</div>


';
}
$child_add_products_pagination = child('div','child_add_products_pagination','

'.$data_pagination_products_list.'

');