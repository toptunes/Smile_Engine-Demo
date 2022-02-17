<?php


//$add_city_data = (Array)json_decode(get_mysql("SELECT * FROM `city_all`  limit 7"))[0];
$idx = get_value($_GET,"id");
$product_id = get_value($_GET,"product_id");
$spec_key = get_value($_GET,"key");
$spec_value = get_value($_GET,"value");
$product_name = get_value($_GET,"product_name");
$counter_k = get_value($_GET,"counter");
$key_all_specifications_key_type = "";
$specifications_chooser = "";




$child_specifications_child_specifications_delete_from = child('div','child_specifications_child_specifications_delete_from'.$_GET["counter"].'','




  <div class="container melo_gray fade-in">
        <div class="row">
            <div class="col-12">
                <div class="mt-4 mb-4">
				
<form>

<div id="value_type_title">آیا واقعا میخواهید حذف شود؟</div>

<div class="mt-2 mb-2 d-flex justify-content-around">
<a id="form_submit" data-query="update_to_(specifications)&pattern=delete_specifications&when='.$idx.'&next=open_inside&module_name=child_template_specifications&product_id='.$_GET['product_id'].'&product_name='.$product_name.'" locate-at="specifications_section" class="myAccount-buttons border px-3 py-2 h5  btn_id" >حذف شود</a>


<a onclick="clear_me(\'locate_specifications'.$counter_k.'\')"  class="myAccount-buttons border px-3 py-2 h5 ">انصراف</a>
</div>

                    </form>
         </div>  
 </div>
 </div> </div>
 
 
 
 
 
 
 
');


?>