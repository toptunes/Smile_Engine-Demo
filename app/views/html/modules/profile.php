<?php

$Access_p=Access_permission("1",$this->user_level,$this->not_user);
include 'child/add_products/pagination.php';
include "child/add_products/my_last_products.php";

$obj = (Array)json_decode(get_mysql("SELECT * FROM `users` where id = '$this->user_id' "))[0];


$dec = (Array)json_decode(get_mysql("

SELECT * FROM `products` WHERE `users_id` = $this->user_id  ORDER BY `id` DESC limit 0 , 12

"));




if($obj['img_0'] != ""){
$profile_img = '
 <div class="d-flex justify-content-around"> <img src="/upload/image/show.php?name='.$obj['img_0'].'&width=95" alt="user-photo" width="95" height="95" class=" rounded-circle"></div>
';
}else{
$profile_img = ' <img src="/app/images/profile.jpg" alt="user-photo" class="w-100 rounded-circle">
';
}
	/*
for($idx = 0; $idx <  count($dec); $idx++){ 
	$obj_products = (Array)$dec[$idx];

$products_list_in_profile .= '

   <div class="w-auto  w-product col-4 col-xs-4 col-sm-3 col-md-3  col-lg-2 col-xl-1 br16 border c_box" id="prdct_2851">
                    <img src="http://app.abyekiha.com/upload/image/show.php?name='.$obj_products['img_0'].'&amp;width=125" alt="product-image" class="img_fit_140 w-product">


<div class="product-summary-info f_s_font">'.$obj_products['product_name'].'</div>
<div class="price-plus  flex-row-reverse justify-content-between">
                            <div class="price-before-off my-2 d-flex justify-content-start " id="before_'.$obj_products['id'].'">

</div>

                        <div class="price justify_flex_end_0 ">

                            <div class=" price-after-off">
                                <span class="font-size-16 flex_0">'.$obj_products['product_off_price'].'</span>
                                <span>تومان</span>
                            </div>
                        </div>
                        <button class="percent display_'.$obj_products['product_takhfif'].'">
                           <span class="off-percent bg-success text-light px-1 rounded-pill mx-2 abyekiha_bg ">'.$obj_products['product_takhfif'].'٪</span>

<span class="main-price">'.$obj_products['product_real_price'].' تومان</span>
                        </button>
                    </div>
      </div> 
		
		
		
		

';

}

*/




$alert = "";
if($obj['f_name'] == '' || $obj['f_name'] == '' ){
$alert .= '
<div class="alert alert-primary m-2 p-2 d-flex justify-content-between" role="alert">
اطلاعات خود را کامل کنید

</div>';
$alert .= '
<a  href="/profile_edit" id="profile_edit" data-query="profile_edit" class="btn_id" >
<div class="alert alert-primary m-2 p-2 d-flex justify-content-between" role="alert">
  نام و نام خانوادگی خود را بنویسید 


<i class="fa fa-pencil" aria-hidden="true"></i> 

</div></a>';	
	}
if($obj['irid'] == "" || $obj['irid'] == 0  ){
$alert .= '<a  href="/profile_edit" id="profile_edit" data-query="profile_edit" class="btn_id" >
<div class="alert alert-primary m-2 p-2 d-flex justify-content-between" role="alert">
کد ملی خود را وارد کنید

<i class="fa fa-pencil" aria-hidden="true"></i> 
</div></a>';
	
	}


if($obj['address'] == ""){
$alert .= '<a href="/profile_edit" id="profile_edit" data-query="profile_edit" class="btn_id" >
<div class="alert alert-primary m-2 p-2 d-flex justify-content-between" role="alert">
آدرس دقیق خود را وارد کنید

<i class="fa fa-pencil" aria-hidden="true"></i>
</div> </a>';	
	
}else{
if($obj['address'] == ""  ){
$alert .= '<a href="/profile_edit" id="profile_edit" data-query="profile_edit" class="btn_id">
<div class="alert alert-primary m-2 p-2 d-flex justify-content-between" role="alert">
آدرس دقیق خود را بنویسید

<i class="fa fa-pencil" aria-hidden="true"></i> 
</div></a>';
	
	}
	
}








if($obj['level'] > 1){
	
if($obj['store_name'] == ""  ){
$alert .= '<a  href="/profile_edit" id="profile_edit" data-query="profile_edit" class="btn_id">
<div class="alert alert-primary m-2 p-2 d-flex justify-content-between" role="alert">
نام فروشگاه خود را وارد کنید

<i class="fa fa-pencil" aria-hidden="true"></i>
</div></a>';
	
	}	
if($obj['category_stores'] == ""  ){
$alert .= '<a  href="/profile_edit" id="profile_edit" data-query="profile_edit" class="btn_id">
<div class="alert alert-primary m-2 p-2 d-flex justify-content-between" role="alert">
مشخص کنید که محصولات شما در چه دسته بندی ای قرار میگیرد

<i class="fa fa-pencil" aria-hidden="true"></i>
</div></a>';
	
	}		
	
if($obj['store_t_name'] == ""  ){
$alert .= '<a  href="/profile_edit" id="profile_edit" data-query="profile_edit" class="btn_id">
<div class="alert alert-primary m-2 p-2 d-flex justify-content-between" role="alert">
نوع فروشگاه خود را برای بخش لیست فروشگاه ها مشخص کنید

<i class="fa fa-pencil" aria-hidden="true"></i>
</div></a>';
	
}		
	
	
	
$add_product_button ='
<div class="  px-2 py-1 border-bottom mb-2 d-flex justify-content-between">
<div class="myAccount-buttons h5 border px-2 py-1"><i class="fas fa-plus"></i><label class="p-1"><a href="/add_product" id="add_product" data-query="add_product" class="btn_id" >
افزودن محصول </a></label></div>

<div class="myAccount-buttons h5 border px-2 py-1"><i class="fas fa-cog"></i><label class="p-1"><a  href="/profile_edit" id="profile_edit" data-query="profile_edit" class="btn_id" >
تنظیمات </a></label></div>
</div>
';
$list_menu_my_profile = '

<div class="border-top mt-1">
<div class="mt-2 mb-2 d-flex justify-content-around">
<div class="myAccount-buttons border px-2 py-1 h5"><i class="fas fa-list"></i><label class="p-1"><a  href="/profile" id="profile" data-query="profile" class="btn_id">
محصولات</a></label></div>
<div class=" myAccount-buttons border px-2 py-1 h5 "><i class="fa fa-shopping-bag" aria-hidden="true"></i>
<label class="p-1"><a href="/orders" id="orders" data-query="orders" class="btn_id" locate-at="profile_elements">
سفارشات </a></label></div>
<div class="myAccount-buttons border px-2 py-1 h5 "><i class="fas fa-list"></i><label class="p-1"><a  href="/returned" id="returned" data-query="returned" class="btn_id" locate-at="profile_elements">
مرجوعی </a></label></div>
</div>
';	
	
}else{
	
$list_menu_my_profile = '



<div class="  px-2 py-1 border-bottom mb-2 d-flex justify-content-between">


<div class="myAccount-buttons h5 border px-2 py-1"><i class="fas fa-cog"></i><label class="p-1"><a  href="/profile_edit" id="profile_edit" data-query="profile_edit" class="btn_id" locate-at="profile_elements">
تنظیمات </a></label></div>

</div>
';		
	
$child_add_products_my_last_products = '';


}


$session_id =session_id();

$html_final = module('div','profile','
<div class="my-3 container container-sm container-md container-lg container-xl container-xxl container-fluid">
'.$alert.'


        <div class="">

	
'.$add_product_button.'




        <div class=" row user-information  d-flex flex-row justify-content-around">
            <div class="col-9 col-md-9 user-personal-information row flex-column mr-1">
                <div class="mb-2">'.$obj["f_name"].' '.$obj["l_name"].'</div>
                <div class="mb-2">'.$obj["category_stores"].' ('.$obj["store_t_name"].')</div>
       
                <div class="mb-2">'.$obj["address"].'</div>
                <div class="mb-2">'.$obj["mob_number"].'</div>
            </div>
<div class="col-3 col-md-3 col-xl-2 pointer userImage btn_id"
id="edit_profile_img" data-query="edit_profile_img" 
>

           '.$profile_img.'


                <div class="name-family text-center mt-2">'.$obj["store_name"].' </div>
            </div>
        </div>
   
'.$list_menu_my_profile.'
		
		
<div id="profile_elements" class=" row justify-content-around dear_element">
        
 '.$child_add_products_my_last_products.'


</div>
         
        </div>
 
    </div>
');


