<?php


$all_color_key_type =json_decode(get_mysql("SELECT id,color_name,color_code FROM `all_color`
 " , 1));

for($idx = 0; $idx <  count($all_color_key_type); $idx++){ 
	$obj = (Array)$all_color_key_type[$idx];
	
$tr = $tr+1;
$VALUE_all_color_key_type = $VALUE_all_color_key_type."
<div class=\"d-flex justify-content-end \"><a onclick=\"feed_parents('".get_value($obj,'color_code')."','color_c_key_$counter_k');feed_parents('".get_value($obj,'color_name')."','color_key_$counter_k');feed_parents('".get_value($obj,'id')."','color_id_$counter_k');\" class=\"col-6\">".get_value($obj,'color_name')."</a>
 <div class=\"col-6 m-2\" style=\" background:".get_value($obj,'color_code')."\"></div>
</div>
";
  
}

$color_chooser = '
<div class="col-12">
<div class="dropdown">
<input class="form-control input_m_form py-2 my-2 " type="text" onfocus="drop_that_list(this.id)"  onfocusout="is_nes_fill_input(this.id)" onkeyup="filterFunction(this.id,this.id+\'list\',1)" id="color_key_'.$counter_k.'"  data-req="1"  name="spec_value_string" autocomplete="off" placeholder="یک رنگ انتخاب کنید" data-msg="یک رنگ انتخاب کنید بعد از اضافه کردن رنگ های دیگری هم در قالب ویژگی بعدی اضافه میکنید" value="'.get_value($obj_specifications,"spec_value_string").'">

<div id="color_key_'.$counter_k.'list" class="dropdown-content">
 '.$VALUE_all_color_key_type.'
</div>
</div>
</div>
<div class="col-12">
<input class="form-control input_m_form py-2 my-2 " type="hidden"  id="color_c_key_'.$counter_k.'"  data-req="1"  name="spec_value_string_2" autocomplete="off" placeholder="کد رنگ" data-msg="کد رنگ خالی است" value="'.get_value($obj_specifications,"spec_value_string_2").'">

<input class="form-control input_m_form py-2 my-2 " type="hidden"  id="color_id_'.$counter_k.'"  data-req="1"  name="color_id" autocomplete="off" placeholder="کد رنگ" data-msg="کد رنگ خالی است" value="'.get_value($obj_specifications,"spec_value_string_2").'">
</div>
';	



$tools_color = child('div','tools_color','

'.$color_chooser.'

<p class="py-2 my-2">
'.get_value($obj,'specifications_info').'
</p>
');