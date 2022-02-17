<?php



$obj_get_sms_active = json_decode($this->data_string);



if(isset($obj_get_sms_active->mob_number) && isset($obj_get_sms_active->phone_active_code) && $obj_get_sms_active->phone_active_code !="" && $obj_get_sms_active->mob_number !=""){
$obj = (Array)json_decode(get_mysql("

SELECT * FROM `users` where `mob_number` = '$obj_get_sms_active->mob_number' and `phone_active_code` = '$obj_get_sms_active->phone_active_code' 

"))[0];	


if($obj["active"] =="0"){
$update = get_mysql("

UPDATE `users` SET `active` = 1,`users_id`=".$obj["id"]." WHERE `users`.`mob_number` = '$obj_get_sms_active->mob_number';


");
}

	
if($obj["id"] !=""){
	
	
	
	$hash = md5($obj["password_hash"]);

$value_all = '
 <div class="container">
 <div class="row">
 <div class="col-md-4 offset-md-4">
 <div class="login-form bg-light mt-4 p-4">


 <div class="col-12">
خوش آمدید به فروشگاه آبیکی ها
<Br>
  <input class="form-control input_m_form" id="username" type="hidden" name="username"  value="'.$obj["username"].'">
   <input class="form-control input_m_form" id="password" type="hidden" name="password"  value="'.$obj["password"].'">
   <input class="form-control input_m_form" id="hash" type="hidden" name="hash"  value="'.$hash.'">
</div>

                    <hr class="mt-4">
           
                </div>
            </div>
        </div>
 </div>


';

$html_final = module('div','get_sms_active',$value_all);
	
}else{
$value_all = '<msg>کد وارد شده اشتباه است</msg>
';
$html_final = module('div','get_sms_active',$value_all);
		
}
	
	
}else{
$obj = (Array)json_decode(get_mysql("

SELECT * FROM `users` where `mob_number` = '$obj_get_sms_active->mob_number'

"))[0];		

if($obj_get_sms_active->mob_number !="" && $obj["active"] =="0"){

include "child/sms_active/child_sms_active_enter_the_code.php";
	

$html_final = module('div','get_sms_active',$child_sms_active_enter_the_code);
	
	
}else{
	$randnum=str_pad(get_rnd_number(4), 4, '0', STR_PAD_LEFT);

$update = get_mysql("

UPDATE `users` SET `phone_active_code` = '".$randnum."' WHERE `users`.`mob_number` = '$obj_get_sms_active->mob_number';


");
include "child/sms_active/child_sms_valid_enter_the_code.php";
	

$html_final = module('div','get_sms_active',$child_sms_valid_enter_the_code);
	
}



}







?>