<?php


$dec = (Array)json_decode(get_mysql("

SELECT * FROM `common_stores` ORDER BY `id` DESC

"));


$child_loop_common_store_name_list="";	
for($idx = 0; $idx <  count($dec); $idx++){ 
	$obj = (Array)$dec[$idx];
	


$child_loop_common_store_name_list .= child('div','child_loop_common_store_name_list','


<div id="cc_'.$idx.'" class="row">
        <div class="col-3 p-4">'.$obj['id'].'</div>
        <div class="col-3 p-4">'.$obj['category_child'].' </div>
        <div class="col-3 p-4" id="editd'.$idx.'">
		'.$obj['store_name'].'	
</div>
  <div class="col-3 p-4">
<a href="#cc_'.$idx.'" id="open_child" locate-at="editbox'.$idx.'" data-query="open_child&module_name=child_edit_common_name&id='.$obj['id'].'&input='.$obj['store_name'].'&counter='.$idx.'" class="btn_id">ویرایش</a>



		</div>


      </div>
	    <div class="row">
 <div class="col-12 offset-md-4">
<div id="editbox'.$idx.'" class="dear_element"></div>
</div>
  </div>
');

										  
}
/*


	<form>
<input class="input_m_form" type="text" data-req="1" name="city_name" value="'.$obj['city_name'].'" autocomplete="off" placeholder="">
<a  id="form_submit" data-query="update_to_(city_all)&when='.$obj["id"].'&next=add_city" data-msg="'.$read_t['switcher'].'" class="btn btn-dark float-end btn_id">'.$switch['save_it'].'</a>

</form>*/
?>