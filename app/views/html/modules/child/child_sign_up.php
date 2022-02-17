<?php


$CPU_conn = new conn();

$CONe = $CPU_conn -> getDBready() ;


//$city_name_list = get_sql_as_list($colname ,$table_name ,$tagname);


$child_sign_up = child('div','child_sign_up','


  <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form class="row g-3">
                        <h4>'.$read_t['store_registration'].'</h4>
                        <div class="col-12">
                        
							<input class="form-control input_m_form" type="text" data-req="1" name="username" autocomplete="off" placeholder="'.$read_t['fill_username_placeholder'].'">
                        </div>
                        <div class="col-12">
                          
                          
							<input class="form-control input_m_form" type="text" data-req="1" name="password" autocomplete="off" placeholder="'.$read_t['fill_password_placeholder'].'">
							
                        </div>
						
						
						
						   <div class="col-12">
                           
						<input class="form-control input_m_form" type="text"  data-jdp ata-jdp-min-date="1398/11/10" data-req="1" name="startdate" autocomplete="off" placeholder="'.$read_t['fill_startdate_placeholder'].'">
							
                        </div>


		   <div class="col-12">
                	
							
<select class="form-select input_m_form" name="sellertype" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
 
</select>	
							
							
                        </div>









 <!-- 
		   <div class="col-12">

						<input class="form-control" type="text"  data-req="1" name="city_name" autocomplete="off" placeholder="'.$read_t['fill_city_placeholder'].'">
							
						
<div class="dropdown">
<input type="text" onfocus="drop_that_list(this.id)"  data-req="1" onfocusout="is_nes_fill_input(this.id)" onkeyup="filterFunction(this.id,this.id+\'list\',1)" id="city_name" name="city_name" autocomplete="off" placeholder="'.$read_t['data_city_name'].'">
<div id="city_namelist" class="dropdown-content">

 '.$city_name_list.'

  </div>
</div> </div>
	-->
							
                       

						
						
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label" for="rememberMe"> Remember me</label>
                            </div>
                        </div>
                        <div class="col-12">
						
							<a  id="form_submit" data-query="insert_to_(stores)" data-msg="'.$read_t['data_fill_all'].'" class="btn btn-dark float-end btn_id">'.$read_t['submit_title'].'</a>

                        </div>
                    </form>
                    <hr class="mt-4">
                    <div class="col-12">
                        <p class="text-center mb-0">

'.$read_t['msg_no_acc'].'

 <a href="#" id="add_City" data-query="sign_up" class="nav-link btn_id" title="'.$read_t['sign_up_title'].'">'.$read_t['get_access'].'</a>

</p>
                    </div>
                </div>
            </div>
        </div>
 </div>










');
?>