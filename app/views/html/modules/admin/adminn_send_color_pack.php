<?php
$Access_p=Access_permission("3",$this->user_level,$this->not_user);


//$add_city_data = (Array)json_decode(get_mysql("SELECT * FROM `city_all`  limit 7"))[0];



$admin_send_color_pack = admin('div','admin_send_color_pack','


<div class="container fade-in mb-5">
	
   <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form class="row g-3">
                        <h4>ارسال نام و کد رنگ</h4>
                        <div class="col-12">
                        
<input class="form-control input_m_form" type="text" data-req="1" name="color_name" autocomplete="off" placeholder="color name">
                        </div>
                       
                    <div class="col-12">
                        
<input class="form-control input_m_form" type="text" data-req="1" name="color_code" autocomplete="off" placeholder="color code">
                        </div>

						
					
                        <div class="col-12">
						
<a id="form_submit" data-query="insert_to_(all_color)&next=open_admin&module_name=admin_get_last_just_added" data-msg="'.$switch['data_fill_all'].'" class="btn btn-dark float-end btn_id">'.$switch['submit_title'].'</a>

                        </div>
                    </form>
            
                </div>
            </div>
        </div>


<div>

      <div class="row">
        <div class="col-3 p-4">آی دی</div>
        <div class="col-3 p-4">تاریخ ارسال</div>
        <div class="col-3 p-4">عنوان</div>
		  <div class="col-3 p-4">ویرایش</div>
      </div>

	
	'.$admin_lists_store_name_list.'
      
    
</div>



			
			
 </div>


');


?>