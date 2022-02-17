<?php

$category_id_2 = "";
$for_now_2="";
$child_add_products_edit_category_2="";
$VALUE_all_category_2="";

if(get_value($obj,'category_id_2') != "" ){
$id_of = get_value($obj,'category_id_2');	
$dec = (Array)json_decode(get_mysql("

SELECT category_child FROM
	 `category_all` 
WHERE 
	`id` = ".$id_of."


"));
$obja = (Array)$dec[0];

$dec = (Array)json_decode(get_mysql("

SELECT id,category_name FROM
	 `category_all` 
WHERE 
	`category_child` = ".get_value($obja,'category_child')."


"));
	
}else{
$id_of = get_value($_GET,'id_of');	
$name_of = get_value($_GET,'name_of');
	
$dec = (Array)json_decode(get_mysql("

SELECT id,category_name FROM
	 `category_all` 
WHERE 
	`category_child` = ".$id_of."


"));	
	
}




for($idx = 0; $idx <  count($dec); $idx++){ 
	$obj_category_chooser_ = (Array)$dec[$idx];
	
$VALUE_all_category_2 .= "<a 
onclick=\"feed_parents('".get_value($obj_category_chooser_,'category_name')."','category_id_2');feed_parents('".get_value($obj_category_chooser_,'id')."','category_id_2_res');\"
>".get_value($obj_category_chooser_,'category_name')."</a> ";
	
if(get_value($obj,'category_id_2') == get_value($obj_category_chooser_,'id')){
	$for_now_2 = get_value($obj_category_chooser_,'category_name');
}

}




$child_add_products_edit_category_2 = child('div','child_add_products_edit_category_2','




<div class="col-12  ">
 <p class="m-2 labels">دسته بندی دوم را انتخاب کنید </p>
<div class="dropdown">


<input class="form-control  jm m-2"  onfocus="drop_that_list(this.id)"  onfocusout="is_nes_fill_input(this.id)" onkeyup="filterFunction(this.id,this.id+\'list\',1)" id="category_id_2"  autocomplete="off" placeholder="زیر مجموعه '.$name_of.' انتخاب کنید . . ." type="text"  value="'.$for_now_2.'">
<input  class="input_m_form" id="category_id_2_res" name="category_id_2" data-msg="باید برای این محصول یک دسته بندی دوم انتخاب کنید اگر مورد مناسب نیست هیچکدام را انتخاب کنید"  data-req="1" type="hidden"  value="'.get_value($obj,'category_id_2').'">
 
<div id="category_id_2list" class="dropdown-content">


 '.$VALUE_all_category_2.'
 '."
<a 
onclick=\"feed_parents('هیچکدام','category_id_2');feed_parents('0','category_id_2_res');\"
>هیچکدام</a>
</div>
".'

</div>
</div>


');