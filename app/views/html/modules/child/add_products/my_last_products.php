<?php
$page_x = get_value($_GET,'page');

if($page_x == ""){
$page_x_2 = 0;	
$page_x = 0;
}else{
$page_x_2 = $page_x*10;	
}
	
$dec = (Array)json_decode(get_mysql("

SELECT * FROM `products` WHERE `users_id` = $this->user_id  ORDER BY `id` DESC limit $page_x_2 , 12

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
/*
for($iz = 0; $iz <  3; $iz++){ 
if($obj['img_'.$iz.''] !=""){
$izo = $iz+1;
if($izo == 1){
$msg_e = "اصلی";	
}else{
$msg_e = $izo;
}	
${"img_".$idx."_1"} .= '
<div class="col-4 p-4 ">
<figure class="figure">
<a href="#" id="open_child" data-query="open_child&module_name=child_footer" locate-at="dear_modal_html" at-end="open_modal" class="btn_id"> 
<img src="/upload/image/show.php?name='.$obj['img_'.$iz.''].'&width=95" class="figure-img img-fluid rounded"> 
</a>
  <figcaption class="figure-caption text-end">عکس '.$msg_e.'</figcaption>
</figure>

</div>
';
}
}

for($iz = 3; $iz <  6; $iz++){ 
if($obj['img_'.$iz.''] !=""){
$izo = $iz+1;

	
${"img_".$idx."_2"} .= '
<div class="col-4 p-4 ">
<figure class="figure">

<img src="/upload/image/show.php?name='.$obj['img_'.$iz.''].'&width=95" class="figure-img img-fluid rounded"> 

  <figcaption class="figure-caption text-end">عکس '.$izo.'</figcaption>
</figure>

</div>
';
}
}

for($iz = 6; $iz <  9; $iz++){ 
if($obj['img_'.$iz.''] !=""){
$izo = $iz+1;
${"img_".$idx."_3"} .= '
<div class="col-4 p-4 ">
<figure class="figure">

<img src="/upload/image/show.php?name='.$obj['img_'.$iz.''].'&width=95" class="figure-img img-fluid rounded"> 

  <figcaption class="figure-caption text-end">عکس '.$izo.'</figcaption>
</figure>

</div>
';
}
}


for($iz = 9; $iz <  12; $iz++){ 
if($obj['img_'.$iz.''] !=""){
$izo = $iz+1;
${"img_".$idx."_4"} .= '
<div class="col-4 p-4 ">
<figure class="figure">
<img src="/upload/image/show.php?name='.$obj['img_'.$iz.''].'&width=95" class="figure-img img-fluid rounded"> 

  <figcaption class="figure-caption text-end">عکس '.$izo.'</figcaption>
</figure>

</div>
';
}
}	
	
	*/

$idx_inn = ($idx+1)+($page_x*10);
$savv = '<p class="info_s"> محصول شماره '.$idx_inn.'</p>';
$child_add_products_my_last_products_loop .= child('div','child_add_products_my_last_products_loop','
<div class="c_box col-6 col-sm-6 col-md-4 col-sm-4 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-between">
  <div >
   
<div class="border-bottom row info_s  d-flex justify-content-between"> 

<div class="col-6">
شناسه   '.get_value($obj,'id').'
</div>
<div class="col-3 btn_id" id="edit_product('.$idx.')('.$idx.')" data-query="edit_product&product_id='.get_value($obj,'id').'" locate-at="dear_modal_html" at-end="open_modal"><i class="fas fa-ellipsis-h h3"></i></div>
</div>
  <div class="product-summary-info f_s_font my-2">'.get_value($obj,'product_name').' '.get_value($obj,'product_model').' '.get_value($obj,'brand_name').'</div>
 <div class="col-4 col-sm-6 col-md-6 col-sm-12 col-lg-12 col-xl-12 col-xxl-12 p-4">
<img src="/upload/image/show.php?name='.$obj['img_0'].'&width=95" class="figure-img rounded"> 
 </div>
    </div>
	<div class="row">
    
      	  
        <div class="col-12 p-4">

		<div class="vc-toggle-container "  ><span id="bala_'.get_value($obj,'id').'" class="dear_element"></span>
         موجود <label class="vc-switch" >
            <input type="checkbox" id="vaaf_g'.get_value($obj,'id').'" class="vc-switch-input d-none" '.$checked_r.'>
    <span class="vc-switch-label"  data-on="است" data-off="نیست" onclick="runmini(\'open_mini&module_name=add_products/update_is_avaliable&when='.$obj['id'].'\')"></span>
	
            <span class="vc-handle dont_click" ></span>
          </label>
        </div>
		
		

		
		
		</div>


      </div>


<div class="border-top row  d-flex justify-content-between"> 

<div class="myAccount-buttons col-6 btn_id border py-3 " id="e_calc('.$idx.')('.$idx.')" data-query="e_calc&product_id='.get_value($obj,'id').'" locate-at="dear_modal_html" at-end="open_modal"><i class="fa fa-line-chart" aria-hidden="true"></i>
 محاسبه</div>



<div class="myAccount-buttons col-6 btn_id border py-3 " id="open_inside('.$idx.')('.$idx.')" data-query="open_inside&module_name=child_template_specifications&product_id='.get_value($obj,'id').'&product_name='.get_value($obj,'product_name').' '.get_value($obj,'product_model').' '.get_value($obj,'brand_name').'"  locate-at="dear_modal_html" at-end="open_modal"><i class="fa fa-bars" aria-hidden="true"></i>


 ویژگی ها</div>
</div>

 </div>

');

										  
}

if(get_value($obj,'id') == ""){
	$child_add_products_pagination = "";
$child_add_products_my_last_products_loop = '
<div class="col-12 c_box py-3">
<p>شما تا به حال هیچ محصولی به فروشگاه خود اضافه نکردید. از طریق منوی افزودن محصول میتوانید محصولات خود را ارسال کنید</p>
</div>
';
}

$child_add_products_my_last_products = child('div','child_add_products_my_last_products','
 <div class=" container container-sm container-md container-lg container-xl container-xxl container-fluid">


<div class="row">
 '.$child_add_products_my_last_products_loop.'      
    </div>
	'.$child_add_products_pagination.'
</div>
');




?>