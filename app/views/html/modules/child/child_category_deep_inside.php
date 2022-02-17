<?php



$dec_3 = json_decode(get_mysql("

SELECT * FROM `category_all` where `category_child` = ".$_GET['deep']." and deleted = 0


"));
if($_GET['color']!=""){
$color = $_GET['color'];
}else{
$color = "c3e8f0";	
}
for($idz = 0; $idz <  count($dec_3); $idz++){ 
    $obj_3 = (Array)$dec_3[$idz];


$child_category_deep_inside .= child('div','child_category_deep_inside','

<div id="3cc_'.$idz.'" class="row" style="background: #'.$color.' !important;">
        <div class="col-3 p-4">
<a href="#2rditbox'.$obj_3['id'].'" id="open_child('.$obj_3['id'].')" data-query="open_child&module_name=child_category_deep_inside&deep='.$obj_3['id'].'&color=ddecf0" locate-at="2rditbox'.$obj_3['id'].'" class="btn_id">
'.$obj_3['id'].'
باز شود
</a>
</div>
        <div class="col-3 p-4" id="3editd_2'.$idz.'">'.$obj_3['category_child'].' </div>
        <div class="col-3 p-4" id="3editd'.$idz.'">
		'.$obj_3['category_name'].'
</div>
  <div class="col-3 p-4">
<a href="#2rditbox'.$obj_3['id'].'" id="open_child" locate-at="3rditbox'.$obj_3['id'].'" data-query="open_child&module_name=child_edit_category_name&id='.$obj_3['id'].'&input='.$obj_3['category_name'].'&counter='.$idz.'" class="btn_id">ویرایش</a>
 | 

<a href="#2rditbox'.$obj_3['id'].'" id="open_child('.$obj_3['id'].''.$obj_3['id'].')"  data-query="open_child&module_name=child_delete_category&when='.$obj_3['id'].'&name='.$obj_3['category_name'].'" class="btn_id">حذف</a>


		</div>


      </div>
	    <div class="row">
 <div class="col-12 offset-md-4">
<div id="2rditbox'.$obj_3['id'].'" class="dear_element"></div>
<div id="3rditbox'.$obj_3['id'].'" class="dear_element"></div>

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