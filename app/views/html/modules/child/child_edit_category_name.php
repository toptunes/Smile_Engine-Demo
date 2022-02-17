<?php



//$add_city_data = (Array)json_decode(get_mysql("SELECT * FROM `city_all`  limit 7"))[0];
$idx = $_GET["id"];
$obj = (Array)json_decode(get_mysql("

SELECT category_name,category_child,category_level FROM `category_all` WHERE id = '$idx'

"))[0];


$child_edit_category_name = child('div','child_edit_category_name'.$_GET["counter"].'','




  <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 mb-4 p-4">
                    <form class="row g-3">
						
                        <div class="col-12">
<input id="inbox'.$_GET["counter"].'" class="form-control input_m_form jm" type="text" data-req="1" name="category_name" autocomplete="off" placeholder="'.$switch['title_add_city_placeholder'].'" value="'.$obj['category_name'].'">

                        </div>
     
	                <div class="col-12">
<input id="inbox'.$_GET["counter"].'" class="form-control input_m_form jm" type="number" data-req="1" name="category_level" autocomplete="off"  value="'.$obj['category_level'].'">

                        </div>
	 
               <div class="col-12">
<input id="inbox_2'.$_GET["counter"].'" class="form-control input_m_form jm" type="number" data-req="1" name="category_child" autocomplete="off" placeholder="" value="'.$obj['category_child'].'">

                        </div>
				

 <div class="col-12">
						

<a  id="form_submit"  data-query="update_to_(category_all)&when='.$_GET["id"].'&next=add_category"  data-msg="'.$read_t['switcher'].'" class="btn btn-dark float-end btn_id">'.$switch['edit_it'].'</a>
                        </div>
                    </form>
         </div>  
 </div>
 </div> </div>
');


?>