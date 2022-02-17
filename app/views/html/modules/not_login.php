<?php

$html_final = module('div','not_login','



<div class="col-md-12">
                <div class="login-form bg-light mt-4 p-4">
                    <form action="" method="" class="row g-3">
                        <h4>ورود به حساب کاربری</h4>
                        <div class="col-12">
                                           
<input class="form-control input_m_form" type="text" name="username" id="username" placeholder="کد کاربری" />
                        </div>
                        <div class="col-12">
                          

<input class="form-control input_m_form" type="password" name="password"  id="password" placeholder="رمز عبور" />
                        </div>
						
						
						
						
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label" for="rememberMe"> Remember me</label>
                            </div>
                        </div>
                        <div class="col-12">
						
			


                        </div>
                    </form>
                    <hr class="mt-4">
                    <div class="col-12">
                        <p class="text-center mb-0">


<button id="not_login_custom" custom-fn="1" fn-name="not_login_custom" data-query="check_to_(users)&next=dash_page&only=id" class="btn btn-success btn-lg btn_id" data-bs-dismiss="modal">ورود</button>

</p>

                    </div>
                </div>
            </div>
 
	   
	   

');



?>