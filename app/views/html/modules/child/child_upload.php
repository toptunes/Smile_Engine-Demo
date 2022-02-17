<?php




$child_upload = child('div','child_upload','
 


  <div class="container">

        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form class="row g-3" >
                        <h4>فقط فایل های تصویر با فرمت JPG PNG و حجم کمتر از 5 مگابایت مجاز است</h4>
                        <div class="col-12">
                        
<input class="form-control input_m_form" type="file" allow-format="jpg_png_jpeg" allow-size="5000000" data-upload="1" name="filename" autocomplete="off" placeholder="" >
                  

                  	  
				  </div>
                       


						
					
                        <div class="col-12">
						
<a  id="form_submit" data-query="insert_to_(uploads)" data-msg="'.$read_t['data_fill_all'].'" class="btn btn-dark float-end btn_id">'.$read_t['submit_title'].'</a>

                        </div>
                    </form>
            
                </div>
            </div>
        </div>
 </div>


');



?>