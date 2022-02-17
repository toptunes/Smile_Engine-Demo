<?php
$page_x = get_value($_GET,'page');

if($page_x == ""){
$page_x_2 = 0;	
$page_x = 0;
}else{
$page_x_2 = $page_x*10;	
}
	
$dec = (Array)json_decode(get_mysql("

SELECT 
products.product_takhfif, products.product_real_price, products.product_off_price,
products.id,products.img_0,products.product_name,products.brand_name,products.product_model,
users.store_t_name,users.store_name,
store_type.id as mobo

FROM `products`
INNER JOIN `users`
INNER JOIN `store_type`

ON products.available = 1 and products.users_id = $_q1 and users.id = $_q1 and store_type.store_t_name = users.store_t_name

 ORDER BY products.id DESC limit $page_x_2 , 12

"));


$child_add_products_my_last_products_loop = "";		
for($idx = 0; $idx <  count($dec); $idx++){ 
	$obj = (Array)$dec[$idx];
if(get_value($obj,'available') == 1){
	$checked_r ="checked";
}else{
	$checked_r ="";
}
	
$img_data_loop = "";


$idx_inn = ($idx+1)+($page_x*10);
$savv = '<p class="info_s"> محصول شماره '.$idx_inn.'</p>';
$child_add_products_my_last_products_loop .= child('div','child_add_products_my_last_products_loop','
<div class="c_box col-6 col-sm-6 col-md-4 col-sm-4 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-between">
  <div >
  



<div class="border-bottom row info_s  d-flex justify-content-between"> 
<div class="col-6">
شناسه   '.get_value($obj,'id').'
</div>
<div class="col-3" ><i class="fas fa-ellipsis-h h3"></i></div>
</div>
  <div class="product-summary-info f_s_font my-2">'.get_value($obj,'product_name').' '.get_value($obj,'product_model').' '.get_value($obj,'brand_name').'</div>
 <div class="w-100 d-flex justify-content-around col-4 col-sm-6 col-md-6 col-sm-12 col-lg-12 col-xl-12 col-xxl-12 p-4">
 <a href="/product/'.get_value($obj,'id').'" id="product" data-query="product/'.get_value($obj,'id').'"
 class="btn_id">
<img src="/upload/image/show.php?name='.$obj['img_0'].'&width=95" class="figure-img rounded"> 
</a>
</div>
</div>


<div class="price-plus  flex-row-reverse justify-content-between">
          
            <button class="percent display_'.$obj['product_takhfif'].'">
            <span class="main-price font-size-16 ">'.number_format($obj['product_real_price']).' تومان</span>
            </button>
            <div class="price justify_flex_end_1 ">
               <div class=" price-after-off">
                  <span class="font-size-16 ">'.number_format($obj['product_off_price']).'
                  تومان</span>
                  <span class="off-percent bg-success text-light px-1 rounded-pill mx-2 abyekiha_bg font-size-16 display_'.$obj['product_takhfif'].'">'.$obj['product_takhfif'].'٪</span>
               </div>
            </div>
         </div>



 </div>

');

										  
}

if(get_value($obj,'id') == ""){
	$child_add_products_pagination = "";
$child_add_products_my_last_products_loop = '
<div class="col-12 c_box py-3">
<p>هیچ محصولی برای این فروشگاه وجود ندارد</p>
</div>'.$_q1.'
';
}

$child_store_list_store_products = child('div','child_store_list_store_products','
 <div class="container container-sm container-md container-lg container-xl container-xxl container-fluid">

<nav  class="my-2 info_s  py-3" style="--bs-breadcrumb-divider: \' > \';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item" ></li>
 <li class="breadcrumb-item " ><a href="/" id="fill_it(0)" data-query="fill_it&amp;o=2&amp;module_name=fill_products_list&amp;method=last_just_added" class="btn_id fas fa-home">  </a></li>
    <li class="breadcrumb-item " ><a href="/store_list/" id="store_list" data-query="store_list/" class="btn_id"> لیست فروشگاه </a></li>
	    <li class="breadcrumb-item " ><a href="/store_list/'.get_value($obj,'mobo').'" id="store_list" data-query="store_list/'.get_value($obj,'mobo').'" class="btn_id"> '.get_value($obj,'store_t_name').' </a></li>
	 <li class=" active" aria-current="page"> '.get_value($obj,'store_name').' </li>
  </ol>
</nav>
 
<div class="row">
 '.$child_add_products_my_last_products_loop.'      
    </div>
	'.$child_add_products_pagination.'
</div>
');




?>