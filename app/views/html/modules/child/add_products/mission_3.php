<?php




$child_add_products_missions = child('div','child_add_products_missions','
 <div id="child_add_products_box" class="dear_element">
 <div class="mw-1000 container container-sm container-md container-lg container-xl container-xxl container-fluid">
 <div class="row">
 <div >
 <div class=" bg-light mt-4 ">
 <form class="row g-3 c_box">
 <h4>ارسال جزئیات بیشتر برای محصول  " '.$obj['product_name'].' '.$obj['product_model'].' " در فروشگاه</h4>

<p class="info_s">مرحله 3 از 3</p>


<div class="col-12 c_box">
<p class="info_s"> آیا شکستنی است؟ ( حمل با احتیاط )
</p>
<div class="row ">
<div class="col-6">
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio1" class="input_m_form custom-control-input h3" name="Breakable" value="1">
  <label class="custom-control-label" for="customRadio1">بله</label>
</div>
</div>
<div class="col-6">
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio1"  class="input_m_form custom-control-input h3" name="Breakable" value="0" checked>
  <label class="custom-control-label" for="customRadio1"> خیر </label>
</div>
</div>
</div>
</div>

<div class="col-12 c_box">
<p class="info_s">  برای حمل این محصول به چه وسیله ای نیاز است؟ - حداقل ِ ممکن انتخاب شود
</p>

<div class="row ">

<div class="col-4">
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio1" class="input_m_form custom-control-input h3" name="carry" value="1" checked>
  <label class="custom-control-label" for="customRadio1">موتور</label>
</div>
</div>

<div class="col-4">
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio1" class="input_m_form custom-control-input h3" name="carry" value="2" >
  <label class="custom-control-label" for="customRadio1"> سواری </label>
</div>
</div>

<div class="col-4">
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio1" class="input_m_form custom-control-input h3" name="carry" value="3" >
  <label class="custom-control-label" for="customRadio1"> وانت </label>
</div>
</div>


</div>
</div>


 <input class="input_m_form" type="hidden" name="next_mission" value="4">



<div class="col-12 ">

 <p class="info_s">
توضیحات یا معرفی محصول
 . متنی که مینویسید در سایت به خریدار نمایش داده میشود

</p>

<textarea class="form-control input_m_form" type="text" name="product_detail" placeholder="خلاصه بنویسید" style="margin-top: 0px; margin-bottom: 0px; height: 293px;">
</textarea>
</div>


				
					
             
                        <div class="col-12 ">
						 <p class="info_s c_box">
در ادامه ویژگی ها را اضافه خواهید کرد
</p>		
							<a id="form_submit" data-query="update_to_(products)&next=&next=add_product&mission=2&when='.$obj['id'].'&tab=1" data-msg="'.$read_t['data_fill_all'].'" class="btn abyekiha_bg float-end btn_id">ادامه</a>

                        </div>
                    </form>
                    <hr class="mt-4">
           
                </div>
            </div>
        </div>
 </div>
 </div>

');




?>