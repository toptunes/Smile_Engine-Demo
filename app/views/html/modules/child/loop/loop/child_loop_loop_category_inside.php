<?php


$dec_2 = json_decode(get_mysql("

SELECT * FROM `category_all` where `category_child` = ".$obj['id']."  and `category_level` = 1


"));



for($idy = 0; $idy <  count($dec_2); $idy++){ 
    $obj_2 = (Array)$dec_2[$idy];



$child_loop_loop_category_inside .= child('div','child_loop_loop_category_inside','


<div id="2cc_'.$idy.'" class="row" style="background: #8be7fa;">
        <div class="col-3 p-4">

<a href="#2cc_'.$idy.'" id="open_child('.$obj_2['id'].')" data-query="open_child&module_name=child_category_deep_inside&deep='.$obj_2['id'].'" locate-at="2zditbox'.$obj_2['id'].'" class="btn_id">

اینجا کلیک کن '.$obj_2['id'].'</a>

</div>
        <div class="col-3 p-4" id="2editd_2'.$idy.'">'.$obj_2['category_child'].' </div>
        <div class="col-3 p-4" id="2editd'.$idy.'">
		'.$obj_2['category_name'].'
</div>
  <div class="col-3 p-4">
<a href="#2cc_'.$idy.'" id="open_child" locate-at="2zditbox'.$obj_2['id'].'" data-query="open_child&module_name=child_edit_category_name&id='.$obj_2['id'].'&input='.$obj_2['category_name'].'&counter='.$idy.'" class="btn_id">ویرایش</a>



		</div>


      </div>
	    <div class="row">
 <div class="col-12 offset-md-4">
<div id="2zditbox'.$obj_2['id'].'" class="dear_element"></div>
</div>
  </div>
  '.$child_loop_loop_loop_category_inside.'
');


										  
}


?>