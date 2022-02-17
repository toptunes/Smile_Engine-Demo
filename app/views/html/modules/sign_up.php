<?php

$Access_p=Access_permission("1",$this->user_level,$this->not_user);


$obj = (Array)json_decode(get_mysql("SELECT * FROM `users` where id = '$this->user_id' "))[0];




$all_hospital =json_decode(get_mysql("SELECT category_name FROM `category_all` WHERE `category_level` = 0 "));
foreach($all_hospital as $key => $val) {
    $key_all_hospital = $key_all_hospital."$key";
    foreach(((array)$all_hospital)[$key] as $val2) {
        $VALUE_all_hospital = $VALUE_all_hospital."<a onclick=\"feed_parents(this.innerHTML,'category_stores')\">$val2</a> ";
    }
}




//$city_name_list = get_sql_as_list($colname ,$table_name ,$tagname);
include "child/header_bold_title.php";
include "child/child_footer.php";

$html_final = module('div','sign_up','

<div id="sign_up_box_result"  class="dear_element"></div>

 <div class="container">
 <div class="row">
 <div class="col-md-4 offset-md-4">
 <div class="login-form bg-light mt-4 p-4">
 <form class="row g-3">
 <h4>'.$switch['store_registration'].'</h4>
 <div class="col-12">
 <input class="form-control input_m_form jm" type="text" data-req="1" name="f_name" value="'.$obj["f_name"].'" placeholder="'.$switch['fill_f_name'].'">
 
 </div>
 <div class="col-12">
 <input class="form-control input_m_form jm" type="text" data-req="1" name="l_name" placeholder="'.$switch['fill_l_name'].'" value="'.$obj["l_name"].'" >
							
 </div>
						
 <div class="col-12">
 <input class="form-control input_m_form jm" type="number" data-req="1" name="mob_number"  placeholder="'.$switch['fill_phone_number'].'" value="'.$obj["mob_number"].'">
							
 </div>
 <div class="col-12">
 <input class="form-control input_m_form jm" type="number" data-req="1" name="irid" placeholder="'.$switch['fill_code_mellii'].'" value="'.$obj["irid"].'">
							
 </div>
	
 <div class="col-12">
 <textarea class="form-control input_m_form jm" type="number" data-req="1" name="address" placeholder="آدرس دقیق فروشگاه خودتان را اینجا بنویسید" >'.$obj["address"].'</textarea>					
 </div>
					

<div class="col-12">
<input class="form-control input_m_form jm" type="text"  name="email" placeholder="'.$switch['fill_email_placeholder'].'" value="'.$obj["email"].'">
</div>




		   <div class="col-12">

		

<div class="dropdown">
<input class="form-control input_m_form jm" type="text"  onfocus="drop_that_list(this.id)"  data-req="1" onfocusout="is_nes_fill_input(this.id)" onkeyup="filterFunction(this.id,this.id+\'list\',1)" id="category_stores" name="category_stores" autocomplete="off" placeholder="'.$read_t['Equipment_ToolName'].'" value="'.$obj["category_stores"].'">
<div id="category_storeslist" class="dropdown-content">

 '.$VALUE_all_hospital.'

  </div>

</div>



			</div>				
                       

						
						
             
                        <div class="col-12">
						
							<a  id="form_submit" data-query="update_to_(users)&when='.$obj["id"].'&msg='.$read_t['store_req_result_msg'].'" locate-at="sign_up_box_result" data-msg="'.$read_t['data_fill_all'].'" class="btn btn-dark float-end btn_id">ارسال</a>

                        </div>
                    </form>
                    <hr class="mt-4">
           
                </div>
            </div>
        </div>
 </div>








');
?>