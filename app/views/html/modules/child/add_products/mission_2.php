<?php




$child_add_products_missions = child('div','child_add_products_missions','


 <div id="child_add_products_box" class="dear_element">
 <div class="mw-1000 container container-sm container-md container-lg container-xl container-xxl container-fluid">
 <div class="row">
 <div>
 <div class=" bg-light mt-4 ">
 <form class="row g-3 c_box">
 <h4>ارسال عکس برای   " '.$obj['product_name'].' '.$obj['product_model'].' " </h4>

 <p class="info_s">مرحله 2 از 3</p>

<div class="col-12 c_box">
<p class="info_s"> برای آپلود عکس بر روی + بزنید - تا 10 عکس مجاز است
</p>
<div id="this_file_uploader_parent">
<input id="this_file_uploader" class="d-none on_change" multiple type="file" accept=".png, .jpg, .jpeg" autocomplete="off" placeholder="" >
</div>
<button class="plus" onclick="click_it(\'this_file_uploader\',0)">

                            <i class="fas fa-plus-square text-danger"></i>
                        </button>
<div id="fileList" style="display: flex; flex-direction: column-reverse;">
</div>					
						
</div>
 <input class="input_m_form" type="hidden" name="next_mission" value="3">


		
<section id="show_btn_form" class="row  " style="display:none;">
                        <div  class="col-6 ">
		
							<a  id="form_submit" data-query="update_to_(products)&next=&next=add_product&when='.$obj["id"].'" data-msg="'.$read_t['data_fill_all'].'" class="btn abyekiha_bg float-end btn_id ">آپلود و ادامه</a>

                        </div>
						                     <div class="col-6">
		
			

                        </div>
						</section>
                    </form>
                    <hr class="mt-4">
           
                </div>
            </div>
        </div>
 </div>
 </div>
');




?>