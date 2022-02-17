<?php

include "edit/category_chooser.php";




$child_add_products_missions = child('div','child_add_products_missions','

 <div id="child_add_products_box" class="dear_element">
 <div class="mw-1000 container container-sm container-md container-lg container-xl container-xxl container-fluid">
 <div class="row">
 <div>
 <div class=" bg-light mt-4">
 <form class="row  ">
 <h2 class="h2">اضافه کردن محصول </h2>
 <h4 class="info_s">مرحله 1 از 3</h4>
 
 <div class="col-12 c_box">
<p class="info_s">فقط نام محصول 
<b class="text-danger">( بدون اضافه کردن نام برند , حجم و یا مدل)</b></p>
 <input class="form-control input_m_form" type="hidden" name="next_mission" value="2">
 <input class="form-control input_m_form jm " data-msg="نام محصول وارد نشده . نوشتن نام محصول اجباری است" type="text" data-req="1" name="product_name" placeholder="نام محصول">
 </div>
 

 <div class="col-6 c_box fs-6">
<span class="info_s">اگر برند ندارد خالی بگذارید</span>
 <input class="fs-6 form-control input_m_form jm" type="text"  name="brand_name" placeholder="نام برند">
 </div>
 
 <div class="col-6 c_box fs-6">
<span class="info_s">نوع خاصی ندارد خالی بگذارید</span>
 <input class="fs-6 form-control input_m_form jm" type="text" name="product_model" placeholder="نام مدل / نوع">
 </div>
 
'.$category_chooser.'

'.$category_chooser_2.'  

 <div class="col-6 c_box">
<div class="info_s ">قیمت اصلی</div>
 <input class="form-control input_m_form jm" onchange="percent_c_js(\'product_real_price\',\'product_off_price\',\'percent_c\',\'1\')"
onfocusout="percent_c_js(\'product_real_price\',\'product_off_price\',\'percent_c\')" 
 type="number" data-msg="فیلد قیمت نباید خالی باشد" data-req="1" id="product_real_price" name="product_real_price" placeholder="0">
		 </div>	
<div class="col-6 c_box">			
<div class="info_s">
<span class="text-danger">
قیمت بعد از تخفیف
</span></div>
 <input onclick="this.select()"
onchange="percent_c_js(\'product_real_price\',\'product_off_price\',\'percent_c\')" 
onfocusout="percent_c_js(\'product_real_price\',\'product_off_price\',\'percent_c\')" 

class="form-control input_m_form jm" type="number" data-msg="مقدار تخفیف نباید خالی باشد اگر این محصول تخفیف ندارد همان قیمت اصلی را به فیلد (قیمت بعد از تخفیف) بنویسید" id="product_off_price" name="product_off_price" data-req="1" value="0">
 </div>	
  <div class="col-6 c_box">
 <div class="info_s text-danger" id="do_msg">
قیمت بعد از تخفیف کمتر از قیمت اصلی است و درصد اختلاف محاسبه میشود 
</div>
 </div>
 <div class="col-6 c_box">	

<div class="info_s ">
در صد تخفیف محاسبه شده از دو قیمت بالا
</div>

 <input onclick="this.select()"
onchange="percent_d_js(\'product_real_price\',\'product_off_price\',\'percent_c\')"
onfocusout="percent_d_js(\'product_real_price\',\'product_off_price\',\'percent_c\')" 
 class="form-control input_m_form jm" type="text" id="percent_c" name="product_takhfif" data-req="1" value="0" data-msg="عدد درصد تخفیف نباید خالی باشد حداقل عدد 0 بگذارید">

 </div>	



<div id="submit_id_control_in_msg" class="col-12 ">
<p class="info_s c_box">
در صورتی که اطلاعات بالا را به درستی وارد کردید به مرحله بعد بروید ( ثبت و ادامه )
</p>		
							<a  id="form_submit" data-query="insert_to_(products)&next=add_product&mission=2&tab=1"  data-msg="'.$read_t['data_fill_all'].'" class="btn btn-lg abyekiha_bg float-end btn_id">ثبت و ادامه</a>

                        </div>
                    </form>
           
                </div>
            </div>
        </div>
 </div>
</div>
');




?>