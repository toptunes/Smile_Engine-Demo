<?php


$child_header_not_login= child('div','child_header_not_login','
<header class="header-section">
        <div class="header-section-right">
            <img src="app/images/uploads/logo-v2-light-file_115.png" alt="لوگوی دیجی کالا">
            <form action="#">
                <input type="text" class="header-section-right-search" placeholder="جستجو در آبیکی ها ...">
                <i class="fa fa-search header-section-right-search-icon" aria-hidden="true"></i>
            </form>
        </div>
        <div class="header-section-left">
            <a href="#" class="profile-login">
                <i class="fa fa-user my-fa-user" aria-hidden="true"></i>
                <span>ورود به حساب کاربری</span>
            </a>
            <div class="header-left-seperator"></div>
            <a href="#">
                <i class="fa fa-shopping-cart my-fa-shopping-cart" aria-hidden="true"></i>
            </a>
        </div>
       '.$child_templates_header_nav_detail.'
        <a href="#" class="header-section-left-location">
            <span>لطفا شهر و استان خود را انتخاب کنید</span>
            <i class="fas fa-map-marker-alt my-fa-map-marker-alt"></i>
        </a>
    </header>

');
