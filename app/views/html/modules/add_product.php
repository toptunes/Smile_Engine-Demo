<?php
$Access_p=Access_permission("2",$this->user_level,$this->not_user);


$tab_num = get_value($_GET,'tab');

if($tab_num == ""){
   $tab_num=1;	
}

if($tab_num == 1){
   $false_tb_2 = "false";
   $panel_tb_2 = " fade";	
   $active_tb_2 = "";		

   $false_tb_1 = "true";	
   $panel_tb_1 = " fade show active";	
   $active_tb_1 = "active";
}
if($tab_num == 2){
   $false_tb_1 = "false";
   $panel_tb_1 = " fade";	
   $active_tb_1 = "";		

   $false_tb_2 = "true";	
   $panel_tb_2 = " fade show active";	
   $active_tb_2 = "active";	
}
$obj = (Array)json_decode(get_mysql("

   SELECT * FROM `products` WHERE done = '0' and users_id = '$this->user_id' ORDER BY `id` DESC

"))[0];


$is_there_Any_uncom_missions = get_value($obj,'next_mission');
if($is_there_Any_uncom_missions == ""){
   $mission = "";	
   $msg_add_product = "";
}else{

   $mission= $is_there_Any_uncom_missions;
   $msg_add_product = "در صورتی که میخواهید از ابتدا شروع کنید بر روی انصراف از ثبت محصول کلیک کنید";
	
}

include "child/add_products/mission_$mission.php";
include 'child/add_products/pagination.php';
include "child/add_products/my_last_products.php";

$html_final = module('div','add_product','

<div class="mw-1000 container container-sm container-md container-lg container-xl container-xxl container-fluid">
   <div class="col-12">
      <nav>
         <div class="nav nav-tabs flex-nowrap" id="nav-tab" role="tablist">
            <button class="nav-link '.$active_tb_1.' fs-6" id="nav-latest-tab" data-bs-toggle="tab" data-bs-target="#nav-add" type="button" role="tab" aria-controls="nav-latest" aria-selected="'.$false_tb_1.'">افزودن محصول</button>
            <button class="nav-link '.$active_tb_2.' fs-6" id="nav-popular-tab" data-bs-toggle="tab" data-bs-target="#nav-last" type="button" role="tab" aria-controls="nav-popular" aria-selected="'.$false_tb_2.'">لیست محصولات شما</button>
         </div>
      </nav>
   </div> 

   <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane '.$panel_tb_1.'" id="nav-add" role="tabpanel" aria-labelledby="nav-latest-tab">
         '.$child_add_products_missions.'
      </div>
      <div class="tab-pane '.$panel_tb_2.'" id="nav-last" role="tabpanel" aria-labelledby="nav-popular-tab">
         '.$child_add_products_my_last_products.'
      </div>
   </div>
</div>

');
?>