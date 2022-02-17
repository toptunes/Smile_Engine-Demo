<?php


//$add_city_data = (Array)json_decode(get_mysql("SELECT * FROM `city_all`  limit 7"))[0];
include "child/loop/child_loop_only_category_name_select.php";

include 'child/loop/child_loop_common_store_name_list.php';
include 'child/child_add_common_store_name.php';
include 'child/child_footer.php';



$html_final = module('div','common_store_name','


<div class="container fade-in mb-5">
	
       '.$child_add_common_store_name.'
<div>

      <div class="row">
        <div class="col-3 p-4">آی دی</div>
        <div class="col-3 p-4">زیر مجموعه ی</div>
        <div class="col-3 p-4">نام رایج</div>
		  <div class="col-3 p-4">ویرایش</div>
      </div>

	
	'.$child_loop_common_store_name_list.'
      
    
</div>



			
			
 </div>
 '.$child_footer.'  
            

');


?>