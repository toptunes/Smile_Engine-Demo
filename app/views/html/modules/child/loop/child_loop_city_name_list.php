<?php


$child_loop_city_name_list = "";
$fcount = 20;
	

for($idx = 0; $idx <  $fcount; $idx++){ 


$child_loop_city_name_list .= child('div','child_loop_city_name_list','


<div id="cc_'.$idx.'" class="row">
        <div class="col-3 p-4">'.pat('city_all','id',$dec,$idx).'</div>
        <div class="col-3 p-4">'.pat('city_all','date',$dec,$idx).' </div>
        <div class="col-3 p-4" id="editd'.$idx.'">
		'.pat('city_all','city_name',$dec,$idx).'	
</div>
  <div class="col-3 p-4">
<a href="#cc_'.$idx.'" id="open_child" locate-at="editbox'.$idx.'" data-query="open_child&module_name=child_edit_city_name&id='.pat('city_all','id',$dec,$idx).'&input='.pat('city_all','city_name',$dec,$idx).'&counter='.$idx.'" class="btn_id">ویرایش</a>



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
?><?php



$fcount = 20;
	

for($idx = 0; $idx <  $fcount; $idx++){ 


$child_loop_city_name_list .= child('div','child_loop_city_name_list','


<div id="cc_'.$idx.'" class="row">
        <div class="col-3 p-4">'.pat('city_all','id',$dec,$idx).'</div>
        <div class="col-3 p-4">'.pat('city_all','date',$dec,$idx).' </div>
        <div class="col-3 p-4" id="editd'.$idx.'">
		'.pat('city_all','city_name',$dec,$idx).'	
</div>
  <div class="col-3 p-4">
<a href="#cc_'.$idx.'" id="open_child" locate-at="editbox'.$idx.'" data-query="open_child&module_name=child_edit_city_name&id='.pat('city_all','id',$dec,$idx).'&input='.pat('city_all','city_name',$dec,$idx).'&counter='.$idx.'" class="btn_id">ویرایش</a>



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