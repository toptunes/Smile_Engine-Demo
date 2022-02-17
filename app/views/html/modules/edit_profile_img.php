<?php
$Access_p=Access_permission("1",$this->user_level,$this->not_user);


$obj = (Array)json_decode(get_mysql("SELECT * FROM `users` where id = '$this->user_id' "))[0];



$html_final = module('div','edit_profile_img','


<div class="mw-1000 container container-sm container-md container-lg container-xl container-xxl container-fluid">
<div class="row  d-flex justify-content-end">
<div class="col-1">
<a  href="/profile" id="profile" data-query="profile" class="btn_id" >
<i class="fa fa-long-arrow-alt-left" aria-hidden="true"></i> </a>
</div>

</div>

 <div class="row">

				







<div class="col-12">
     
	 
 <form class="row g-3 c_box">
 <h4>ارسال عکس پروفایل  </h4>


<div class=" c_box">
<p class="info_s"> برای آپلود عکس بر روی + بزنید 
</p>
<div id="this_file_uploader_parent">
<input id="this_file_uploader" class="d-none on_change" type="file" accept=".png, .jpg, .jpeg" autocomplete="off" placeholder="" >
</div>
<button class="plus" onclick="click_it(\'this_file_uploader\',0)">

                            <i class="fas fa-plus-square text-danger"></i>
                        </button>
<div id="fileList" style="display: flex; flex-direction: column-reverse;">
</div>					
						
</div>


		
<section id="show_btn_form" class="row  " style="display:none;">
                        <div  class="col-6 ">
		
							<a  id="form_submit" data-query="update_to_(users)&when='.$obj["id"].'&next=profile" data-msg="'.$read_t['data_fill_all'].'" class="btn abyekiha_bg float-end btn_id " >آپلود و ادامه</a>

                        </div>
						                     <div class="col-6">
		
			

                        </div>
						</section>
                    </form>	 
	 
	      
</div>
	
</div>




</div>

	




');



?>
