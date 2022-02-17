<?php


$dec = json_decode(get_mysql("

SELECT * FROM `category_all` where `category_level` = 0


"));

$child_loop_category_name_list = "";
for($idx = 0; $idx <  count($dec); $idx++){ 
    $obj = (Array)$dec[$idx];
	

$child_loop_category_name_list .= child('div','child_loop_category_name_list','


<div id="cc_'.$obj['id'].'" class="row">
        <div class="col-3 p-4 bg-info">
		<a href="#2cc_'.$idx.'" id="open_child('.$obj['id'].')" data-query="open_child&module_name=child_category_deep_inside&deep='.$obj['id'].'" locate-at="2yditbox'.$obj['id'].'" class="btn_id">
'.$obj['id'].'
باز شود
</a>
</div>
        <div class="col-3 p-4 bg-info" id="editd_2'.$idx.'">'.$obj['category_child'].' </div>

<div class="col-3 p-3 bg-info" id="editd'.$idx.'">
		'.$obj['category_name'].'
</div>
  <div class="col-3 p-4 bg-info">
<a href="#cc_'.$idx.'" id="open_child" locate-at="editbox'.$obj['id'].'" data-query="open_child&module_name=child_edit_category_name&id='.$obj['id'].'&input='.$obj['category_name'].'&counter='.$idx.'" class="btn_id">ویرایش</a>



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