<?php


include "loop/child_loop_only_category_name_select.php";

//$add_city_data = (Array)json_decode(get_mysql("SELECT * FROM `city_all`  limit 7"))[0];
$idx = $_GET["id"];
$obj = (Array)json_decode(get_mysql("

SELECT * FROM `common_stores` WHERE id = '$idx'

"))[0];


$child_edit_common_name = child('div','child_edit_common_name'.$_GET["counter"].'','




  <div class="container">
        <div class="row">
            <div class="col-md-12 offset-md-4">
                <div class="login-form bg-light mt-4 mb-4 p-4">
                    <form class="row g-3">
						
                        <div class="col-12">
<input id="inbox'.$_GET["counter"].'" class="form-control input_m_form jm" type="text" data-req="1" name="store_name" autocomplete="off" placeholder="" value="'.$obj['store_name'].'">

                        </div>
     
      <div class="col-5">
<form>
  <label>این نوع مغازه زیر کدام مجموعه است؟</label>
  <select name="category_child" class="form-control input_m_form" id="category_child">

 <option value="'.$obj['category_child'].'">'.$obj['category_child'].'</option>
   
'.$child_loop_only_category_name_select.'
  
  
  </select>
		</div>	
				

 <div class="col-12">
						


<a  id="form_submit" onclick="value_to_innertext(\'inbox'.$_GET["counter"].'\',\'editd'.$_GET["counter"].'\')" data-query="update_to_(common_stores)&when='.$_GET["id"].'&next=null" locate-at="editbox'.$_GET["counter"].'" class="btn btn-dark float-end btn_id">'.$switch['edit_it'].'</a>
                        </div>
                    </form>
         </div>  
 </div>
 </div> </div>
');


?>