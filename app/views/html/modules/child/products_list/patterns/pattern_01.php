<?php

$countt = 1;
for($idx = 0; $idx <  $countt; $idx++){ 
    $obj = (Array)$dec[$idx];
	

$preload_html .= preload('loop','products_list_pattern','


   <div class="w-auto p-2 w-product col-6 col-xs-5 col-sm-3 col-md-3  col-lg-2 col-xl-1 br16 border px-3 c_box" id="prdct_'.pat('products','id',$dec,$idx).'">
             <a href="/product/'.pat('products','id',$dec,$idx).'" id="products" data-query="product/'.pat('products','id',$dec,$idx).'" class="btn_id"><img_lee src="/upload/image/show.php?name='.pat('products','img_0',$dec,$idx).'&width=125" alt="product-image" class="img_fit_140 w-product px-1"></a>

<div class="product-summary-info f_s_font my-2">'.pat('products','product_name',$dec,$idx).' '.pat('products','product_model',$dec,$idx).' '.pat('products','brand_name',$dec,$idx).'</div>
<div class="price-plus  flex-row-reverse justify-content-between">
                            <div class="price-before-off my-2 d-flex justify-content-start " id="before_'.pat('products','id',$dec,$idx).'">

</div>

                        <div class="price justify_flex_end_0 ">

                            <div class=" price-after-off">
                                <span class="font-size-16 flex_0">'.pat('products','product_off_price',$dec,$idx).'</span>
                                <span>تومان</span>
                            </div>
                        </div>
                        <button class="percent display_'.pat('products','product_takhfif',$dec,$idx).'">
                           <span class="off-percent bg-success text-light px-1 rounded-pill mx-2 abyekiha_bg ">'.pat('products','product_takhfif',$dec,$idx).'٪</span>

<span class="main-price">'.pat('products','product_real_price',$dec,$idx).' تومان</span>
                        </button>
                    </div>
      </div>
	  
	  ');
	
}