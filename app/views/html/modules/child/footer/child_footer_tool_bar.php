<?php

if($this->not_user == 1){
$myacc = '
<a href="#" id="fill_it" data-query="fill_it&amp;o=2&amp;module_name=fill_user_sign_up_2" class="tab-link btn_id">
<i class="fas fa-newspaper"></i> <p class="toolbaricontext">فروشنده شوید</p>
</a>';	

	
}else{
$myacc = '
<a href="profile" id="profile"  data-query="profile" class="tab-link btn_id">
<i class="fas fa-newspaper"></i> <p class="toolbaricontext">حساب من</p>
</a>';		
	
}


$child_footer_tool_bar = child('div','child_footer_tool_bar','

<div id="toolbar-bottom" class="border-top toolbar tabbar toolbar-bottom  hidden-md hidden-lg ">
    <nav id="nav" class="toolbar-inner">

        <a href="#" data-bs-toggle="offcanvas" onclick="offcanvas_right()" data-bs-target="#my_modal" class="tab-link">
            <i class="fas fa-align-justify"></i>
            <p class="toolbaricontext">دسته بندی ها</p>
        </a>


        <a class="tab-link btn_id">
            <i class="fas fa-phone-square"></i>
            <p class="toolbaricontext">تماس با ما</p>
        </a>





        '.$myacc.'

        <a href="/store_list" id="store_list" data-query="store_list" class="tab-link btn_id">
            <i class="fas fa-shopping-basket"></i>
            <p class="toolbaricontext">لیست فروشگاه</p>
        </a>
        <span class="tab-link-highlight" style="width: 20%; transform: translate3d(-300%, 0px, 0px);"></span>
    </nav>
</div>

');