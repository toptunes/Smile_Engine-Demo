<?php


//$add_city_data = (Array)json_decode(get_mysql("SELECT * FROM `city_all`  limit 7"))[0];

include 'child/loop/child_loop_city_name_list.php';
include 'child/child_add_city.php';
include 'child/child_footer.php';
include 'sms_sign_up.php';


$preload_html .= preload('div','add_city','


<div class="container fade-in mb-5">
	
       '.$child_add_city.'
<div>

      <div class="row">
        <div class="col-3 p-4">آی دی</div>
        <div class="col-3 p-4">تاریخ ارسال</div>
        <div class="col-3 p-4">نام شهر</div>
		  <div class="col-3 p-4">ویرایش</div>
      </div>

	
	'.$child_loop_city_name_list.'
      
    
</div>



			
			
 </div>
 '.$child_footer.'  
            

');


?>