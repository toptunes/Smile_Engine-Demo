<?php
$Access_p=Access_permission("1",$this->user_level,$this->not_user);


$obj = (Array)json_decode(get_mysql("SELECT * FROM `users` where id = '$this->user_id' "))[0];



$html_final = module('div','orders','


<div class="d-flex align-items-center justify-content-center bg-white">
  <p>لیست سفارش هایی که دریافت کردید</p>
</div>

	




');



?>
