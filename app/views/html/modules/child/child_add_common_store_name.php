<?php




$child_add_common_store_name = child('div','child_add_common_store_name','

  <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form class="row g-3">
                        <h4>نام مغازه وارد کنید . به آن نامی که به صورت رایج میشناسیم</h4>
                        <div class="col-12">
                        
<input class="form-control input_m_form" type="text" data-req="1" name="store_name" autocomplete="off" placeholder="">
                        </div>
                       
<div class="col-12">
<form>
  <label>این نوع مغازه زیر کدام مجموعه است؟</label>
  <select name="category_child" class="form-control input_m_form" id="category_child">

'.$child_loop_only_category_name_select.'
  
  
  </select>
		</div>				
					
                        <div class="col-12">
						
<a  id="form_submit"  data-query="insert_to_(common_stores)&next=common_store_name" data-msg="'.$switch['data_fill_all'].'" class="btn btn-dark float-end btn_id">'.$switch['submit_title'].'</a>

                        </div>
                    </form>
            
                </div>
            </div>
        </div>
 </div>
');




?>