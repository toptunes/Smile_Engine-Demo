<?php

$dec_users = json_decode(get_mysql("

SELECT img_0 FROM `users` where users_id = '$this->user_id'

"));

   $obj_img = (Array)$dec_users[0];


$dec = json_decode(get_mysql("

SELECT sum(how_many_wanted) FROM `all_orders` where users_id = '$this->user_id'

"));
$notif_on_header_carts = count($dec);

for($i = 0; $i  < $notif_on_header_carts; $i ++){
    $obj = (Array)$dec[$i];
/*	
$get_loop_data .= child('div','get_loop_data','




');
*/
	
}	






$be_seller = "";
if($this->user_level == 3){
$admin_panel_btns='
	<li class="nav-item">
		<a  href="/admin_panel" id="admin_panel" data-query="admin_panel" class="nav-link btn_id">
			پنل مدیریت
		</a>
	</li>	
';	
}
if($this->user_level == 1){
$be_seller='
<li class="nav-item">
	<a href="/sign_up" id="sign_up" data-query="sign_up" class="nav-link btn_id">
		فروشنده شوید
	</a>
</li>
';	
}
$child_header_with_login= child('div','child_header_with_login','


<nav class="navbar navbar-expand-sm navbar-light header-section">
    <div class="w-100">


        <div class="row w-100">


            <div class="col-6	col-sm-9 col-md-9 col-lg-9	col-xl-9	col-xxl-9  d-flex justify-content-start">
                <a class="navbar-brand btn_id" href="/" id="fill_it"
                    data-query="fill_it&o=2&module_name=fill_products_list&method=last_just_added"><img
                        src="/app/images/uploads/logo-v2-light-file_115.png" alt="لوگوی آبیکی ها">
                </a>

                <div class="header-section-right-nav-menu">
                    <ul class="nav-menu">

                        <li class="nav-item">
                            <a href="#" data-bs-toggle="offcanvas" onclick="offcanvas_right()"
                                data-bs-target="#my_modal" class="nav-link">

                                دسته بندی
                            </a>
                        </li>

                        '.$be_seller.'


                        <li class="nav-item">
                            <a href="/store_list" id="store_list" data-query="store_list" class="nav-link btn_id">
                                لیست فروشگاه
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/profile" id="profile" data-query="profile" class="nav-link btn_id">
                                حساب من
                            </a>
                        </li>

                        '.$admin_panel_btns.'

                    </ul>



                </div>


            </div>



            <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 d-flex justify-content-end ">

                <div class="profile_btn px-2">
                    <div class="col-4 text-center">

                        <a href="/search" id="search" data-query="search" class=" btn_id">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </a>

                    </div>

                    <div class="col-4 text-center">

                        <a href="/profile" id="profile" data-query="profile" class="btn_id">
                            '.ifnempty(get_value($obj_img,"img_0"),'

                            <img src="/upload/image/show.php?name='.get_value($obj_img," img_0").'&width=95" height="30"
                                width="30" class=" rounded-circle">

                            ').'
                            '.ifempty(get_value($obj_img,"img_0"),'
                            <i class="fa fa-user my-fa-user" aria-hidden="true"></i>
                            ').'

                    </div>

                    <div class="col-4 text-center">
                        <a href="/cart" id="cart" data-query="cart" class="btn_id">
                            <i class="fa fa-shopping-cart my-fa-shopping-cart" aria-hidden="true"></i>

                            '.ifnzero(
                            get_value($obj,'sum(how_many_wanted)'),'
                            <div class="red-circle">'.get_value($obj,'sum(how_many_wanted)').'</div>
                            ').'

                        </a>
                    </div>

                </div>
            </div>

        </div>

    </div>
</nav>



');
