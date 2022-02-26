<?php


include "child/header_bold_title.php";
include "child/child_footer.php";

$preload_html .= preload('div','user_sign_up','



 <div class="container">
 <div class="row">
 <div class="col-md-4 offset-md-4">
 <div class="login-form bg-light mt-4 p-4">
 <form class="row g-3">
 <h4>'.$switch['login_user_registration'].'</h4>
 <div class="col-12">
<p>'.$switch['login_user_registration_detail'].'</p>
 <input class="form-control input_m_form" type="hidden"  data-msg="نام خود را بنویسید - فیلد هایی که قرمز شده اجباری هستند" name="f_name" placeholder="'.$switch['fill_f_name'].'">
 
 </div>
 <div class="col-12">
 <input class="form-control input_m_form" type="hidden"  data-msg="نام خانوادگی خود را بنویسید - فیلد هایی که قرمز شده اجباری هستند" name="l_name" placeholder="'.$switch['fill_l_name'].'">
</div>

<div class="col-12">
 <input class="form-control input_m_form jm" type="tel" pattern="[0-9]*" data-msg="شماره همراه یک عدد 11 رقمی است و با صفر شروع میشود" force-length="11" data-req="1" name="mob_number"  placeholder="'.$switch['fill_phone_number'].'">
							
 </div>




<div class="col-12">
<a  id="form_submit" data-query="insert_to_(users)&next=get_sms_active&if_unique=mob_number&msg='.$switch['sign_up_dup_mob_number'].'" data-msg="'.$read_t['data_fill_all'].'" at-end="at_end_login" class="btn btn-dark float-end btn_id">'.$switch['enter_in'].'</a>

                        </div>
                    </form>
                    <hr class="mt-4">
           
                </div>
            </div>
        </div>
 </div>








');
?>