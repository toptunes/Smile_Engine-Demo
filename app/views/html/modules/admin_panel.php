<?php
$alert="";
$Access_p=Access_permission("3",$this->user_level,$this->not_user);
include 'child/add_products/pagination.php';
include "child/add_products/my_last_products.php";

$obj = (Array)json_decode(get_mysql("SELECT * FROM `users` where id = '$this->user_id' "))[0];


$dec = (Array)json_decode(get_mysql("

SELECT * FROM `products` WHERE `users_id` = $this->user_id  ORDER BY `id` DESC limit 0 , 12

"));








$html_final = module('div','admin_panel','
'.$alert.'
<div class="my-5 container container-sm container-md container-lg container-xl container-xxl container-fluid">
<div>
<section class="  px-2 py-1 border-bottom mb-2 d-flex justify-content-between">
<div class="myAccount-buttons h5 border px-2 py-1"><i class="fas fa-window-maximize"></i><label class="p-1"><a href="/add_category" id="add_category" data-query="add_category" class="btn_id" >
افزودن دسته بندی </a></label>
</div><div class="myAccount-buttons h5 border px-2 py-1"><i class="fas fa-window-maximize"></i><label class="p-1"><a href="/common_store_name" id="common_store_name" data-query="common_store_name" class="btn_id" >
افزودن  نام رایج مغازه ها </a></label>
</div>
</section>


<section class="px-2 py-1 border-bottom mb-2 d-flex justify-content-between">
<div class="myAccount-buttons h5 border px-2 py-1"><i class="fas fa-window-maximize"></i><label class="p-1"><a href="/open_admin" id="open_admin" data-query="open_admin&module_name=admin_send_store_kind_name" class="btn_id" >
ارسال نام عنوان لیست فروشگاه ها </a></label>
</div>
<div class="myAccount-buttons h5 border px-2 py-1"><i class="fas fa-window-maximize"></i><label class="p-1"><a href="/none" id="none" data-query="none" class="btn_id" >
تایید فروشگاه </a></label>
</div>
<div class="myAccount-buttons h5 border px-2 py-1"><i class="fas fa-window-maximize"></i><label class="p-1"><a href="/none" id="none" data-query="none" class="btn_id" >
آخرین محصولات ارسال شده به سایت</a></label>
</div>
</section>

<section class="  px-2 py-1 border-bottom mb-2 d-flex justify-content-between">
<div class="myAccount-buttons h5 border px-2 py-1"><i class="fas fa-window-maximize"></i><label class="p-1"><a href="/open_admin" id="open_admin" data-query="open_admin&module_name=admin_send_specifications_titles" class="btn_id" >
تعریف ویژگی ها </a></label>
</div>

<div class="myAccount-buttons h5 border px-2 py-1"><i class="fas fa-window-maximize"></i><label class="p-1"><a href="/open_admin" id="open_admin" data-query="open_admin&module_name=admin_send_color_pack" class="btn_id" >
تعریف رنگ ها </a></label>
</div>
</section>


     </div>    
    </div>
');


