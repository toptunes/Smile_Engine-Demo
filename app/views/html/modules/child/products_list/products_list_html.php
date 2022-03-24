<?php





$products_list = '


<div class=" container">
    <div class="d-block">
        <div class="row">
        
            <div dir="ltr" class="col-12  d-block justify-content-center">

                <img src="/app/images/android/android-launchericon-512-512.png" class="rounded " alt="...">
                <div class="rounded">
                <h5 class="card-title">Smile engine PHP/js Framework</h5>
                <p>
                https://github.com/toptunes
                </p>
              
            </div>
        </div>
            
        </div>
    </div>

<div class="row">
<div class="col-12">
<div class=" tab-content" id="nav-tabContent">
<div class="border tab-pane fade show active" id="nav-latest">
		<div class=" m-4 my-product-container pb-1">
			<div class="row d-flex aling-items-center  p-2">
                <div class="col-7 info_s">آخرین محصولات اضافه شده</div>
                <div class="col-5 d-flex justify-content-end">
                    <a href="#" class="text-dark">
                        بیشتر
                        <i class="fas fa-chevron-left"></i>
                    </a>
                </div>
            </div>
            <div id="last_just_added_1" class="row flex-nowrap overflow-x-auto justify-content-between py-2">


         
               
              
            </div>
        </div>
 

</div>

<div class="border" id="nav-popular">



    <div class="  m-3 my-product-container pb-1 ">
            <div class="row d-flex aling-items-center  p-2">
                <div class="col-7 info_s">موقت</div>
                <div class="col-5 d-flex justify-content-end">
                    <a href="#" class="text-dark">
                        بیشتر
                        <i class="fas fa-chevron-left"></i>
                    </a>
                </div>
            </div>
            <div id="last_just_added_2" class="row flex-nowrap overflow-x-auto justify-content-between py-2">


         
               
              
            </div>
        </div>





</div>
<div class="border" id="nav-random" >


 
 
    <div class=" m-3 my-product-container pb-1 ">
            <div class="row d-flex aling-items-center  p-2">
                <div class="col-7 info_s">بیشترین تخفیف</div>
                <div class="col-5 d-flex justify-content-end">
                    <a href="#" class="text-dark">
                        بیشتر
                        <i class="fas fa-chevron-left"></i>
                    </a>
                </div>
            </div>
           
            <div id="last_just_added_3" class="row flex-nowrap overflow-x-auto justify-content-between py-2">


         
               
              
            </div>
        </div>




</div>

</div>









';

$preload_html .= preload('div','products_list',

$products_list

);

