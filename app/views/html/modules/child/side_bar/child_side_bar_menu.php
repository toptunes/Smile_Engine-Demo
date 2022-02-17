<?php
	
$child_side_bar_menu = child('div','child_side_bar_menu','


<div class="modal-backdrop fade show" id="backdrop" style="display: none;"></div>

 <div class="offcanvas offcanvas-end" id="my_modal" role="tablist" aria-multiselectable="false">


 <div class="offcanvas-header">
            <button id="offca_close" type="button" class="btn clr_night-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">

		
            <ul id="accordion" class="list-group">
                <li class="list-group-item">
                    <a class="btn clr_night" data-bs-toggle="collapse" href="#collapseOne" >
                        کالای دیجیتال
                    </a>
                    <div id="collapseOne" class="collapse" data-bs-parent="#accordion" >
                        <div class="card-body">



                            <ul id="accordion_2" class="list-group">
                                <li class="list-group-item border border-0 pe-4">
                                    <a class="btn clr_night" data-bs-toggle="collapse" href="#collapseOneOne" >
                                        گوشی موبایل
                                    </a>
                                    <div id="collapseOneOne" class="collapse" data-bs-parent="#accordion_2">
                                        <ul class="list-group">
                                            <li class="list-group-item border border-0 pe-4" data-bs-dismiss="offcanvas">
                                                سامسونگ
                                            </li>
                                            <li class="list-group-item border border-0 pe-4">
                                                اپل
                                            </li>
                                            <li class="list-group-item border border-0 pe-4">
                                                شیائومی
                                            </li>
                                            <li class="list-group-item border border-0 pe-4">
                                                هوآوی
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="list-group-item border border-0 pe-4">
                                    <a class="btn clr_night" data-bs-toggle="collapse" href="#collapseOneTwo" aria-expanded="false">
                                        لوازم جانبی گوشی
                                    </a>
                                    <div id="collapseOneTwo" class="collapse" data-bs-parent="#accordion_2">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                پاوربانک
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="list-group-item border border-0 pe-4">
                                    <a class="btn clr_night" data-bs-toggle="collapse" href="#collapseOneThree">
                                        دوربین
                                    </a>
                                    <div id="collapseOneThree" class="collapse" data-bs-parent="#accordion_2">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                دوربین عکاسی دیجیتال
                                            </li>
                                            <li class="list-group-item">
                                                سونی
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="list-group-item border border-0 pe-4">
                                    <a class="btn clr_night" data-bs-toggle="collapse" href="#collapseOneFour">
                                        لوازم جانبی دوربین
                                    </a>
                                    <div id="collapseOneFour" class="collapse" data-bs-parent="#accordion_2">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                فلان
                                            </li>
                                            <li class="list-group-item">
                                                فلان
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <a class="btn clr_night" data-bs-toggle="collapse" href="#collapsetwo">
                        خودرو ، ابزار و تجهیزات صنعتی
                    </a>
                    <div id="collapsetwo" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item border border-0 pe-4"></li>
                                <li class="list-group-item border border-0 pe-4"></li>
                                <li class="list-group-item border border-0 pe-4"></li>
                                <li class="list-group-item border border-0 pe-4"></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <a class="btn clr_night" data-bs-toggle="collapse" href="#collapsethree">
                        مد و پوشاک
                    </a>
                    <div id="collapsethree" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item border border-0 pe-4"></li>
                                <li class="list-group-item border border-0 pe-4"></li>
                                <li class="list-group-item border border-0 pe-4"></li>
                                <li class="list-group-item border border-0 pe-4"></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <a class="btn clr_night" data-bs-toggle="collapse" href="#collapsefour">
                        اسباب بازی ، کودک و نوزاد
                    </a>
                    <div id="collapsefour" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item"></li>
                                <li class="list-group-item"></li>
                                <li class="list-group-item"></li>
                                <li class="list-group-item"></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <a class="btn clr_night" data-bs-toggle="collapse" href="#collapsefive">
                        کالاهای سوپرمارکتی
                    </a>
                    <div id="collapsefive" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item"></li>
                                <li class="list-group-item"></li>
                                <li class="list-group-item"></li>
                                <li class="list-group-item"></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <a class="btn clr_night" data-bs-toggle="collapse" href="#collapsesix">
                        زیبایی و سلامت
                    </a>
                    <div id="collapsesix" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item"></li>
                                <li class="list-group-item"></li>
                                <li class="list-group-item"></li>
                                <li class="list-group-item"></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <a class="btn clr_night" data-bs-toggle="collapse" href="#collapseseven">
                        خانه و آشپزخانه
                    </a>
                    <div id="collapseseven" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item"></li>
                                <li class="list-group-item"></li>
                                <li class="list-group-item"></li>
                                <li class="list-group-item"></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <a class="btn clr_night" data-bs-toggle="collapse" href="#collapseeight">
                        کتاب ، لوازم التحریر و هنر
                    </a>
                    <div id="collapseeight" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item"></li>
                                <li class="list-group-item"></li>
                                <li class="list-group-item"></li>
                                <li class="list-group-item"></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <a class="btn clr_night" data-bs-toggle="collapse" href="#collapsenine">
                        ورزش و سفر
                    </a>
                    <div id="collapsenine" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item"></li>
                                <li class="list-group-item"></li>
                                <li class="list-group-item"></li>
                                <li class="list-group-item"></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <a class="btn clr_night" data-bs-toggle="collapse" href="#collapseOne">
                        محصولات بومی و محلی
                    </a>
                    <div id="collapseOne" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item"></li>
                                <li class="list-group-item"></li>
                                <li class="list-group-item"></li>
                                <li class="list-group-item"></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
























');
?>
