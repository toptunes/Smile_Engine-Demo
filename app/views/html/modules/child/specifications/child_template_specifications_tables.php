<?php

if($product_id == ""){
$product_id = get_value($_GET,'product_id');
$product_name = get_value($_GET,'product_name');
}
$VALUE_all_child_specifications = "";
$all_child_specifications = "";
$number_of_spec="";
$box_spec="";

$all_child_specifications =json_decode(get_mysql("SELECT * FROM `specifications` WHERE `users_id` = $this->user_id and `product_id` = $product_id and `deleted` = 0  ORDER BY `id` DESC"));

if(isset($all_child_specifications)){
$number_of_spec = count($all_child_specifications);
}

for($idx = 0; $idx < $number_of_spec ; $idx++){ 
	$obj2 = (Array)$all_child_specifications[$idx];
	
/*$VALUE_all_child_specifications .= "<a onclick=\"feed_parents('".$obj2["category_name"]."','category_stores');feed_parents('".$obj2["id"]."','category_stores_res');\">".$obj2['category_name']."</a> ";*/


if(get_value($obj2,"spec_value_string_2")!=""){
$color_circ = '
<span class="off-percent text-light px-1 rounded-pill mx-2 " style="width: 40px;
 height: 40px;float: left; background:'.get_value($obj2,"spec_value_string_2").'"></span>
';	
}else{
$color_circ = "";	
}
	
	
$VALUE_all_child_specifications .= '

<div class="row btn_id" id="open_inside('.$idx.')" data-query="open_inside&module_name=child_specifications_editor&product_name='.$product_name.'&product_id='.$product_id.'&id='.get_value($obj2,"id").'&key='.get_value($obj2,"spec_key").'&value='.get_value($obj2,"spec_value_string").'&counter='.$idx.'" locate-at="locate_specifications'.$idx.'">


<div class="col-6 border py-3">

'.get_value($obj2,"spec_key").'

</div>
<div class="col-6 border py-3" >

'.$obj2["spec_value_string"].'

'.$color_circ.'
</div>



</div>
<div id="locate_specifications'.$idx.'" class="dear_element"></div>
';

	
}
if($VALUE_all_child_specifications !=""){
$box_spec = '

<div class="row">
<div class="col-6 border py-2 melo_gray">
نام ویژگی
</div>
<div class="col-6 border py-2 melo_gray">
مقدار
</div>

</div> 


 '.$VALUE_all_child_specifications.'

<p class="p-2">
برای ویرایش فیلد های جدول بر روی فیلد ها بزنید
</p>


';
	
}


$child_specifications_child_template_specifications_tables = child('div','child_specifications_child_template_specifications_tables','



 '.$box_spec.'




');