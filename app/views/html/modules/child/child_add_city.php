<?php




$child_add_city = child('div','child_add_city','

  <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form class="row g-3">
                        <h4>نام شهر وارد کنید</h4>
                        <div class="col-12">
                        
<input class="form-control input_m_form" type="text" data-req="1" name="city_name" autocomplete="off" placeholder="">
                        </div>
                       


						
					
                        <div class="col-12">
						
<a  id="form_submit"  data-query="insert_to_(city_all)&next=add_city" data-msg="'.$switch['data_fill_all'].'" class="btn btn-dark float-end btn_id">'.$switch['submit_title'].'</a>

                        </div>
                    </form>
            
                </div>
            </div>
        </div>
 </div>
');




?>