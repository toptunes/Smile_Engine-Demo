<?php


$dec = json_decode(get_mysql("

SELECT * FROM `all_color` ORDER BY `id` DESC


"));


for($idx = 0; $idx <  count($dec); $idx++){ 
    $obj = (Array)$dec[$idx];
	

$admin_lists_color_list .= child('div','admin_lists_color_list','


<div id="cc_'.$obj['id'].'" class="row">
        <div class="col-3 p-4 bg-info">
		<a href="#2cc_'.$idx.'" id="open_child('.$obj['id'].')" data-query="open_child&module_name=child_category_deep_inside&deep='.$obj['id'].'" locate-at="2yditbox'.$obj['id'].'" class="btn_id">
'.$obj['id'].'
باز شود
</a>
</div>
        <div class="col-3 p-4 bg-info" id="editd_2'.$idx.'">'.$obj['date'].' </div>

<div class="col-3 p-3 bg-info" style="background:'.$obj['color_code'].' !important;" id="editd'.$idx.'">
		'.$obj['color_name'].' / '.$obj['color_code'].'
</div>
  <div class="col-3 p-4 bg-info">
<a href="#cc_'.$idx.'" id="open_child" locate-at="editbox'.$obj['id'].'" data-query="open_admin&module_name=admin_editor_of_dynamic&id='.$obj['id'].'&input='.$obj['color_name'].'&counter='.$idx.'&t_name=store_type&c_name=store_t_name&type=text&p_next=open_admin&p_module_name=admin_get_last_just_added" class="btn_id">ویرایش</a>



		</div>


      </div>
	    <div class="row">
 <div class="col-12 offset-md-4">
<div id="editbox'.$obj['id'].'" class="dear_element"></div>
<div id="2yditbox'.$obj['id'].'" class="dear_element"></div>

</div>
  </div>


  
  
  
');

										  
}







?>