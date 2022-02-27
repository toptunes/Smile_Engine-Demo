<?php
$valueof = $_GET['module_name'] ?? '';



$dec = json_decode(get_mysql("


SELECT 
all_orders.id as all_orders_id,
all_orders.product_id,
all_orders.color_picked,
all_orders.how_many_wanted,
all_orders.when_selected_price,

products.id as products_id,
products.img_0 as products_img_0,
products.product_takhfif,
products.product_real_price, 
products.product_off_price,
products.product_name,
products.brand_name,
products.product_model,
products.available,
all_color.color_name,
all_color.color_code

FROM `all_orders`
INNER JOIN `products`
INNER JOIN `all_color`
ON  products.id = all_orders.product_id  and all_orders.users_id = $this->user_id
and paid = 0  and how_many_wanted != 0 and all_color.id = all_orders.color_picked ORDER BY all_orders_id DESC

"));
$notif_on_header_carts = count($dec);

for($i = 0; $i  < $notif_on_header_carts; $i ++){
    $obj = (Array)$dec[$i];
	
$get_loop_data .= child('div','get_loop_data','

<div class=" border-bottom  m-2 ">


    <div class="card-header border row">

        <div class="col-6 ">
        <div>شناسه  '.$obj['product_id'].' </div>
        </div>


        <div class="d-flex justify-content-end col-6 btn_id close_x" id="open_inside" data-query="open_inside&module_name=remove_cart&when='.get_value($obj,'all_orders_id').'&p_name='.get_value($obj,'product_name').'&p_id='.get_value($obj,'product_id').'" locate-at="idoflocation" at-end="run_s_pop" >
        <i class="fa text-danger fa-window-close h3"></i>
        </div>



        </div>




        <div class="bg-light border 
        row d-flex justify-content-between">

        <div class="row col-8 ">
        <p class="col-6  p-2">'.$obj['product_name'].' '.$obj['brand_name'].' '.$obj['product_model'].'
        </p>
        <p class="col-6   p-2">'.$obj['how_many_wanted'].' عدد
        </p>
        <p class="col-6  p-2">

        قیمت  '.$obj['product_off_price'].'
        </p> 
        <p class="col-6  p-2">
        '.ifnzero(get_value($obj,'color_name'),'
        رنگ '.get_value($obj,'color_name').'
        <span class="off-percent text-light m-1 rounded-pill mx-2 d-flex" style="width: 20px; height: 20px; background:'.get_value($obj,'color_code').'"></span>  
        ').'  
        </p> 

        </div> 


        <div class="row col-4 d-flex justify-content-end">
        <div class="d-flex justify-content-end">
        <img src="/upload/image/show.php?name='.get_value($obj,'products_img_0').'&width=125" alt="aaa" class="rounded w-product w-100 my-3 img_fit_140">
        </div>
    </div>
    </div>
</div>


  


');

	
}	










$html_final = module('div','cart','

  <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 col-lg-9 p-2  px-2 py-2 mt-1 rounded ">
                <div class="order-history">
                    <p>تاریخچه ی سفارشات</p>
                </div>

				
		<nav>
<div class="order-division nav nav-tabs flex-nowrap " id="nav-tab" role="tablist">

<button class="nav-link  active fs-6  class-service" id="nav-latest-tab" data-bs-toggle="tab" data-bs-target="#nav-add1" type="button" role="tab" aria-controls="nav-add1" aria-selected="true">
    <span>در انتظار پرداخت</span>
<span class="number-of-orders">'.$notif_on_header_carts.'</span>
</button>

<button class="nav-link  class-service fs-6" id="nav-popular-tab" data-bs-toggle="tab" data-bs-target="#nav-add2" type="button" role="tab" aria-controls="nav-add2" aria-selected="false">
    <span>در حال پردازش</span>
<span class="number-of-orders">0</span>
</button>


<button class="nav-link  class-service fs-6" id="nav-popular-tab" data-bs-toggle="tab" data-bs-target="#nav-add3" type="button" role="tab" aria-controls="nav-add3" aria-selected="false">
    <span>تحویل شده</span>
<div class="number-of-orders">0</div>
</button>

<button class="nav-link  class-service fs-6" id="nav-popular-tab" data-bs-toggle="tab" data-bs-target="#nav-add4" type="button" role="tab" aria-controls="nav-add4" aria-selected="false">
    <span>مرجوعی</span>
<div class="number-of-orders">0</div>
</button>

<button class="nav-link  class-service fs-6" id="nav-popular-tab" data-bs-toggle="tab" data-bs-target="#nav-add5" type="button" role="tab" aria-controls="nav-add5" aria-selected="false">
    <span>لغو</span>
<div class="number-of-orders">0</div>
</button>



</div>
</nav>		
				
				
				
				
				
                <div class="contents">






<div class="tab-content" id="nav-tabContent">

<div class="my-4 fade show active  " id="nav-add1" role="tabpanel" aria-labelledby="nav-add1">

'.$get_loop_data.'


</div>

<div class="tab-pane " id="nav-add2" role="tabpanel" aria-labelledby="nav-add2">

2
   
</div>


<div class="tab-pane" id="nav-add3" role="tabpanel" aria-labelledby="nav-add3">

3
   
</div>

<div class="tab-pane " id="nav-add4" role="tabpanel" aria-labelledby="nav-add4">

4
   
</div>

<div class="tab-pane" id="nav-add5" role="tabpanel" aria-labelledby="nav-add5">

5
   
</div>


</div>









            </div>
        </div>
    </div>

');