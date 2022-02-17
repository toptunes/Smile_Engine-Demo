<?php
$product_id = get_value($obj,'id');
$product_name = get_value($obj,'product_name');

include "./modules/child/specifications/child_template_specifications.php";



if($obj['product_name'] == ""){
	$tt_add_product = 'محصول اضافه کنید';

}else{
	$tt_add_product = 'محصول اضافه شد';
}

$child_add_products_missions = child('div','child_add_products_missions','
 <div id="child_add_products_box" class="dear_element"></div>
 <div class="mw-1000 container container-sm container-md container-lg container-xl container-xxl container-fluid">
 <div class="row c_box">
 <div>
 <div class="mt-4">

 <div class="mx-3 px-2 border-bottom">
 <p class="info_s">
 ویژگی ها یعنی : رنگ ها - وزن - ارتفاع - لیتر - طول - عرض و ....
</p></div>


<div class="col-12 border-bottom">



'.$child_specifications_child_template_specifications.'




</div>   </div>  
            </div> </div>
  <form class="row g-3  m-4">
 <input class="input_m_form" type="hidden" name="done" value="1" >
   </form>
 
       
<a id="form_submit" data-query="update_to_(products)&next=add_product&when='.$obj['id'].'&tab=1" data-msg="'.$read_t['data_fill_all'].'" class="btn abyekiha_bg float-end btn_id">افزودن محصول دیگر</a>



    
       
 </div>


');




?>