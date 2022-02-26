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
                      Example
                    </a>
                    <div id="collapseOne" class="collapse" data-bs-parent="#accordion" >
                        <div class="card-body">



                            <ul id="accordion_2" class="list-group">
                                <li class="list-group-item border border-0 pe-4">
                                    <a class="btn clr_night" data-bs-toggle="collapse" href="#collapseOneOne" >
                                        Example
                                    </a>
                                    <div id="collapseOneOne" class="collapse" data-bs-parent="#accordion_2">
                                        <ul class="list-group">
                                            <li class="list-group-item border border-0 pe-4" data-bs-dismiss="offcanvas">
                                                Example
                                            </li>
                                            <li class="list-group-item border border-0 pe-4">
                                                Example
                                            </li>
                                            <li class="list-group-item border border-0 pe-4">
                                                Example
                                            </li>
                                            <li class="list-group-item border border-0 pe-4">
                                                Example 
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="list-group-item border border-0 pe-4">
                                    <a class="btn clr_night" data-bs-toggle="collapse" href="#collapseOneTwo" aria-expanded="false">
                                        Example   
                                    </a>
                                    <div id="collapseOneTwo" class="collapse" data-bs-parent="#accordion_2">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                Example
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
                                                Example
                                            </li>
                                            <li class="list-group-item">
                                                Example
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="list-group-item border border-0 pe-4">
                                    <a class="btn clr_night" data-bs-toggle="collapse" href="#collapseOneFour">
                                        Example
                                    </a>
                                    <div id="collapseOneFour" class="collapse" data-bs-parent="#accordion_2">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                Example
                                            </li>
                                            <li class="list-group-item">
                                                Example
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
                        Example
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
                        Example
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
                        Example
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
                        Example
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
                        Example
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
                        Example
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
                        Example
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
                        Example
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
                        Example
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
