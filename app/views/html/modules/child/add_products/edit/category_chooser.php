<?php

$for_now = "";
$child_add_products_edit_category_2 = "";
$VALUE_all_category="";
$category_chooser = "";
$category_chooser_2 = "";

$obj_users_r = (Array)json_decode($_SESSION['users_r'])[0];
	

$dec = (Array)json_decode(get_mysql("

SELECT id,category_name FROM
	 `category_all` 
WHERE 
	`category_child` = ".$obj_users_r["category_stores_id"]."


"));


for($idx = 0; $idx <  count($dec); $idx++){ 
	$obj_category_chooser_ = (Array)$dec[$idx];
	
$VALUE_all_category .= "<a 
id=\"open_inside\" data-query=\"open_inside&module_name=inside_category_2&id_of=".$obj_category_chooser_['id']."&name_of=".$obj_category_chooser_['category_name']."\" class=\"btn_id\"
locate-at=\"category_2\"

onclick=\"feed_parents('".$obj_category_chooser_["id"]."','category_id_res');feed_parents('".$obj_category_chooser_["category_name"]."','category_id');\"
>".$obj_category_chooser_['category_name']."</a> ";
/*

*/	
if(get_value($obj,'category_id') == get_value($obj_category_chooser_,'id')){
	$for_now = get_value($obj_category_chooser_,'category_name');
}

}

$category_chooser='
<div class="col-12 c_box ">
 <p class="m-2 labels">برای این محصول دسته بندی انتخاب کنید</p>
<div class="dropdown">


<input class="form-control  jm m-2"  onfocus="drop_that_list(this.id)"  onfocusout="is_nes_fill_input(this.id)" onkeyup="filterFunction(this.id,this.id+\'list\',1)" id="category_id"  autocomplete="off" placeholder="دسته بندی انتخاب کنید . . ." type="text"  value="'.$for_now.'">
<input  class="input_m_form" id="category_id_res" name="category_id" data-req="1" data-msg="باید برای این محصول یک دسته بندی انتخاب کنید"  data-req="1" type="hidden"  value="'.get_value($obj,'category_id').'">
 
<div id="category_idlist" class="dropdown-content">
 '.$VALUE_all_category.'
</div>


</div>
</div>


<div class="col-12 c_box ">

<div id="category_2" class="dear_element">
'.$child_add_products_edit_category_2.'
</div>


</div>

';	



