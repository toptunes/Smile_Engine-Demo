<?php

/*
$obj = (Array)json_decode(get_mysql("SELECT * FROM `products` where id = '$_q1' "))[0];

$obj_user = (Array)json_decode(get_mysql("SELECT * FROM `users` where id = '".$obj['users_id']."' "))[0];
*/
$obj = (Array)json_decode(get_mysql("
SELECT 
products.product_takhfif, products.product_real_price, products.product_off_price,
products.id,products.img_0,products.img_1,products.img_2,products.img_3,products.img_4,
products.product_name,products.brand_name,products.product_model,
users.store_t_name,users.store_name,products.available,
users.id as usersid,
users.img_0 as usersimg_0
FROM `products`
INNER JOIN `users`
ON  products.id = $_q1  and users.id = products.users_id 
"))[0];


$dec = (Array)json_decode(get_mysql("
SELECT * FROM `specifications` WHERE `product_id` = $_q1 and `deleted` = 0 ORDER BY `spec_value_string` ASC

"));
for($idx = 0; $idx <  count($dec); $idx++){ 
	$obj_spec = (Array)$dec[$idx];
	if($obj_spec['spec_key'] == "رنگ"){
$value_2c= $obj_spec['spec_value_string_2'];
	$value_id= $obj_spec['color_id'];	
	   $color_spec .= '


  <details data-popover="up">
  
<summary id="pop_'.$idx.'">
<span class="off-percent text-light m-1 rounded-pill mx-2 " style="width: 40px; height: 40px; float:right;background:'.$value_2c.'" >
<input class="w-100 h-100 form-check-input mt-0 "  type="radio" value="'.$value_2c.'" onclick="closeAll_details();click_it(\'pop_'.$idx.'\',0);set_it(\'color_picked\',\''.$value_id.'\')" aria-label="Radio button for following text input " style="background:'.$value_2c.'">
</span>
</summary>

<div>  
	  '.$obj_spec['spec_value_string'].'
<i class="fa fa-sort-desc ckas" aria-hidden="true"></i>  </div>
 </details>



';	
		
	}else{
		
		  $list_spec .= "
	   <p><span class=\"off-percent text-light px-1 rounded-pill mx-2 \" >".$obj_spec['spec_value_string']."</span></p>";	
	}

	
}

$html_final = module('div','product','

<div class="  container container-sm container-md container-lg container-xl container-xxl container-fluid  ">

<form>
   <div class="row d-flex  justify-content-between">
      <div class="col-12 name-of-product">
         <h2>'.$obj['product_name'].' '.$obj['brand_name'].' '.$obj['product_model'].'</h2>
      </div>
      <div class="col-lg-4 col-md-6 d-flex  flex-row">
         <div class="col-3 product-pictures d-flex flex-column align-items-center">
            <div class="my-chevron-up">
               <i class="fa fa-sort-asc" aria-hidden="true"></i>
            </div>
            <div class="picture-of-product">
               <img src="/upload/image/show.php?name='.$obj['img_0'].'&width=32" alt="aaa" class="w-100">
            </div>
            <div class="picture-of-product">
               <img src="/upload/image/show.php?name='.$obj['img_1'].'&width=32" alt="aaa" class="w-100">
            </div>
            <div class="picture-of-product">
               <img src="/upload/image/show.php?name='.$obj['img_2'].'&width=32" alt="aaa" class="w-100">
            </div>
            <div class="picture-of-product">
               <img src="/upload/image/show.php?name='.$obj['img_3'].'&width=32" alt="aaa" class="w-100">
            </div>
            <div class="picture-of-product">
               <img src="/upload/image/show.php?name='.$obj['img_4'].'&width=32" alt="aaa" class="w-100">
            </div>
            <div class="my-chevron-down">
               <i class="fa fa-sort-desc" aria-hidden="true"></i>
            </div>
         </div>
         <div class="col-9 chosen-picture">
            <img src="/upload/image/show.php?name='.$obj['img_0'].'&width=400" alt="aaa" class="w-100 rounded">
         </div>
      </div>
      <div class="product-information-1 col-lg-5 col-md-6">
         <p>'.$obj['product_detail'].'</p>
         <div class="color-of-product">
            <div></div>
            <div class="circle-colors">
               <div class="circle-1"></div>
               <div class="circle-2"></div>
               <div class="circle-3"></div>
               <div class="circle-4"></div>
               <div class="circle-5"></div>
            </div>
         </div>
         <div class="product-properties">
            <ul>
			
 	<div class="input-group">
	
 		<div>
'.ifdef($color_spec,"<p>انتخاب رنگ : </p>").'
'.$color_spec.'
 		</div>
 	</div>
			

			'.$list_spec.'
              
         
            </ul>
         </div>
      </div>
      <div class="bg-fff c-product__seller-info  c-product__seller-box buying-section col-lg-4 col-md-8 mr-auto container mx-2">

		<div class="price-plus  flex-row-reverse justify-content-between">
            <div class="border-bottom">
               <div class=" d-flex justify-content-end">
                  <p class="picture-of-product w-100"> فروشگاه '.$obj['store_name'].'</p>
                  <img src="/upload/image/show.php?name='.$obj['img_0'].'&width=32" alt="aaa"   class="picture-of-product  rounded-circle">
               </div>
            </div>
            <button class="percent display_'.$obj['product_takhfif'].'">
            <span class="main-price font-size-16 ">'.number_format($obj['product_real_price']).' تومان</span>
            </button>
            <div class="price justify_flex_end_1 ">
               <div class=" price-after-off">
                  <span class="font-size-18 ">'.number_format($obj['product_off_price']).'
                  تومان</span>
                  <span class="off-percent bg-success text-light px-1 rounded-pill mx-2 abyekiha_bg font-size-18  display_'.$obj['product_takhfif'].'">'.$obj['product_takhfif'].'٪</span>
               </div>
            </div>
         </div>
		  <select class="input_m_form form-control" name="how_many_wanted" id="inputGroupSelect03">
               <option value="1" selected>تعداد انتخاب کنید </option>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
            </select>
		 
         <div dir="ltr" class="input-group mb-3">
            <div class="input-group-prepend">
<input class="input_m_form" name="when_selected_price" type="hidden" value="'.get_value($obj,'product_off_price').'">
<input class="input_m_form" name="owner_id" type="hidden" value="'.get_value($obj,'usersid').'">		
			
 	<input class="input_m_form" name="product_id" type="hidden" value="'.$_q1.'">
 
'.ifdef($color_spec,'<input class="input_m_form" id="color_picked" data-req="1" data-msg="از بخش انتخاب رنگ لطفا انتخاب کنید که سفارش شما با چه رنگی ثبت شود" name="color_picked" type="hidden" value="">').'

'.ifndef($color_spec,'<input class="input_m_form" id="color_picked" data-req="1" data-msg="از بخش انتخاب رنگ لطفا انتخاب کنید که سفارش شما با چه رنگی ثبت شود" name="color_picked" type="hidden" value="0">').'

<button class="btn btn-outline-secondary abyekiha_bg  btn_id" type="button" 
 id="form_submit" data-query="insert_to_(all_orders)&success=cart_add_success&if_uniques=add_to_all_stores'.ifndef($color_spec,'_NOCOLOR').'&upam=add_to_cart&nav=1" locate-at="idoflocation" at-end="run_s_pop"

> افزودن به سبد خرید </button>



            </div>
           
         </div>
      </div>
   </div>
   <div class="row relative-products">
      <div class="col-lg-12">
         <p>محصولات مرتبط</p>
      </div>
      <div class="relative-product-link col-6 col-md-4 col-lg-3">
         <img src="https://dummyimage.com/255x152/dee2e6/6c757d.jpg" alt="aaa" class="w-100">
      </div>
      <div class="relative-product-link col-6 col-md-4 col-lg-3">
         <img src="https://dummyimage.com/255x152/dee2e6/6c757d.jpg" alt="aaa" class="w-100">
      </div>
      <div class="relative-product-link col-6 col-md-4 col-lg-3">
         <img src="https://dummyimage.com/255x152/dee2e6/6c757d.jpg" alt="aaa" class="w-100">
      </div>
      <div class="relative-product-link col-6 col-md-4 col-lg-3">
         <img src="https://dummyimage.com/255x152/dee2e6/6c757d.jpg" alt="aaa" class="w-100">
      </div>
   </div>
   </form>
</div>



');


