<?php
/*
session_unset();

session_destroy();
$_SESSION['users_r'] = "";
*/
$Access_p=Access_permission("1",$this->user_level,$this->not_user);

$VALUE_all_store_type="";	
$key_all_store_type="";
$VALUE_all_category_level_0_name="";
$STORE_NAME="";
$category_chooser = "";
$store_t_chooser="";



$success_msg = get_value($_GET,'success');


$obj = (Array)json_decode(get_mysql("SELECT * FROM `users` where id = '$this->user_id' ")) [0];

$all_category_level_0_name =json_decode(get_mysql("SELECT id,category_name FROM `category_all` WHERE `category_level` = 0 "));



for($idx = 0; $idx <  count($all_category_level_0_name); $idx++){ 
	$obj2 = (Array)$all_category_level_0_name[$idx];
	
$VALUE_all_category_level_0_name .= "<a onclick=\"feed_parents('".$obj2["category_name"]."','category_stores');feed_parents('".$obj2["id"]."','category_stores_res');\">".$obj2['category_name']."</a> ";
	
}


$all_store_type =json_decode(get_mysql("SELECT store_t_name FROM `store_type` "));

foreach($all_store_type as $key => $val) {
    $key_all_store_type = $key_all_store_type."$key";
    foreach(((array)$all_store_type)[$key] as $val2) {
        $VALUE_all_store_type = $VALUE_all_store_type."<a onclick=\"feed_parents(this.innerHTML,'store_t_name')\">$val2</a> ";
    }
}



if(get_value($obj,'level') > 1){
$STORE_NAME ='
<div class="col-12 c_box "><p class="m-2 labels">نام فروشگاه</p><input name="store_name" data-req="1"  type="text" class="form-control input_m_form jm m-2" placeholder="" value="'.get_value($obj,'store_name').'"></div>
';	
$category_chooser = '
<div class="col-12 c_box ">
 <p class="m-2 labels">دسته بندی کلی محصولات فروشگاه خود را انتخاب کنید</p>
<div class="dropdown">
<input class="form-control input_m_form m-2" type="text" onfocus="drop_that_list(this.id)"  onfocusout="is_nes_fill_input(this.id)" onkeyup="filterFunction(this.id,this.id+\'list\',1)" id="category_stores" name="category_stores" autocomplete="off" placeholder="دسته بندی کلی انتخاب کنید . . ." value="'.get_value($obj,'category_stores').'">

<input class="input_m_form" type="hidden" id="category_stores_res" data-req="1" data-msg="باید انتخاب کنید که فروشگاه شما چه دسته بندی ای دارد" name="category_stores_id" value="'.get_value($obj,'category_stores_id').'">
<div id="category_storeslist" class="dropdown-content">
 '.$VALUE_all_category_level_0_name.'
</div>
</div>
</div>
';	
$store_t_chooser='
<div class="col-12 c_box ">
 <p class="m-2 labels">نوع فروشگاه خود را برای لیست فروشگاه ها انتخاب کنید</p>
<div class="dropdown">
<input class="form-control input_m_form jm m-2" type="text" onfocus="drop_that_list(this.id)"  data-req="1" onfocusout="is_nes_fill_input(this.id)" onkeyup="filterFunction(this.id,this.id+\'list\',1)" id="store_t_name" name="store_t_name" autocomplete="off" placeholder="نوع فروشگاه انتخاب کنید . . ." value="'.get_value($obj,'store_t_name').'">
<div id="store_t_namelist" class="dropdown-content">

 '.$VALUE_all_store_type.'

</div>
</div>
</div>
';	

	
}





$html_final = module('div','profile_edit','


<div class="my-3 mw-1000 container container-sm container-md container-lg container-xl container-xxl container-fluid">
   
<div class="d-flex justify-content-start">
	<a href="#" id="log_out_custom" custom-fn="1" fn-name="log_out_custom&nav=1" class="btn_id myAccount-buttons h5 border px-2 py-1">
			<i class="fas fa-sign-out-alt"></i>
				<span>خروج از حساب</span>
		</a>
    </div>

   <form>
     <H3 class="m-3 text-success">'.$success_msg.'</H3>
        <div class="border-right">
            <div>
                <div class="d-flex justify-content-between ">
                    <h4 class="text-right">تنظیمات پروفایل</h4>
                </div>
                <div class="row">


<div class="col-12 c_box "><p class="m-2 labels">نام</p><input name="f_name" data-req="1"  type="text" class="form-control input_m_form jm m-2" placeholder="" value="'.get_value($obj,'f_name').'" next-name="l_name"></div>
					


<div class="col-12 c_box "><p class="m-2 labels">نام خانوادگی</p><input name="l_name" data-req="1"  type="text" class="form-control  input_m_form jm m-2" value="'.get_value($obj,'l_name').'" next-name="submit"></div>

'.$STORE_NAME.'

 <div class="col-12 c_box ">
 <p class="m-2 labels">آدرس </p>
 <textarea class="form-control input_m_form jm m-2" data-req="1" name="address" placeholder="آدرس دقیق خودتان را اینجا بنویسید" style="margin-top: 8px; margin-bottom: 8px; height: 144px;">'.get_value($obj,'address').'</textarea>					
 </div>

<div class="col-12 c_box "><p class="m-2 labels">کد ملی</p><input name="irid" force-length="10" data-msg="کد ملی یک عدد ده رقمی است" type="number" class="form-control  input_m_form jm m-2" value="'.get_value($obj,'irid').'" ></div>



'.$category_chooser.'


'.$store_t_chooser.'

               
<div class="mt-5 text-center">
<a id="form_submit"  data-query="update_to_(users)&when='.get_value($obj,'id').'&next=profile_edit&success=ذخیره شد"  data-msg="'.get_value($read_t,'data_fill_all').'"  class="btn btn-dark  abyekiha_bg profile-button btn_id">ذخیره</a>
</div>

            </div>
        </div>
       </div>

</div>

</form>
</div>

	




');



?>
