<?php




$child_sms_valid_enter_the_code = child('div','child_sms_valid_enter_the_code','

<div class="container">
 <div class="row">
 <div class="col-md-4 offset-md-4">
 <div class="login-form bg-light mt-4 p-4">
  <span style="color:red">کد اس ام اس نخواهد شد این کد را موقت استفاده کن '.$randnum.'</span>

 <form class="row g-3">
 <h4>'.$obj_get_sms_active->mob_number.'</h4>

<div class="col-12">
 <input class="form-control input_m_form jm" id="activecode" type="number" data-req="1" name="phone_active_code"  placeholder="- - - -">
							
 </div>
 <input class="form-control input_m_form" type="hidden" name="mob_number"  value="'.$obj_get_sms_active->mob_number.'">
<div class="col-12">
کد چهار رقمی تایید هویت به شماره تلفن شما ارسال شده است . 
</div>

<div class="col-12">
<a  id="form_submit" data-query="get_sms_active" at-end="at_end_login" data-msg="'.$read_t['data_fill_all'].'" class="btn btn-dark float-end btn_id">ارسال</a>

                        </div>
                    </form>
                    <hr class="mt-4">
           
                </div>
            </div>
        </div>
 </div>');
