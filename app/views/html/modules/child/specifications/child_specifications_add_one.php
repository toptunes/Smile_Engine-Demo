<?php



//$add_city_data = (Array)json_decode(get_mysql("SELECT * FROM `city_all`  limit 7"))[0];

$idx = get_value($_GET,"id");

$product_id = get_value($_GET,"product_id");
$product_name = get_value($_GET,"product_name");

$spec_key = get_value($_GET,"key");
$spec_value = get_value($_GET,"value");

$counter_k = get_value($_GET,"counter");
$key_all_specifications_key_type = "";
$specifications_chooser = "";


$all_specifications_key_type =json_decode(get_mysql("SELECT specification_name FROM `specifications_kinds`
 " , 1));
$tr= 340;
foreach($all_specifications_key_type as $key => $val) {
    $key_all_specifications_key_type = $key_all_specifications_key_type."$key";
    foreach(((array)$all_specifications_key_type)[$key] as $val2) {
		$tr = $tr+1;
        $VALUE_all_specifications_key_type = $VALUE_all_specifications_key_type."
		<a id=\"open_child($tr)\" data-query=\"open_child&module_name=child_specifications_made&name=$val2\" locate-at=\"specification_type_value\" class=\"btn_id\" onclick=\"feed_parents(this.innerHTML,'specifications_key_$counter_k')\">$val2</a> ";
    }
}

$specifications_chooser = '
<div class="col-12">
<div class="dropdown">
<input class="form-control input_m_form py-2 my-2 " type="text" onfocus="drop_that_list(this.id)"  onfocusout="is_nes_fill_input(this.id)" onkeyup="filterFunction(this.id,this.id+\'list\',1)" id="specifications_key_'.$counter_k.'"  data-req="1"  name="spec_key" autocomplete="off" placeholder="عنوان ویژگی را انتخاب کنید" data-msg="عنوان ویژگی را انتخاب نکردید . بعد از انتخاب عنوان ویژگی بر روی افزودن بزنید" value="'.$spec_key.'">

<div id="specifications_key_'.$counter_k.'list" class="dropdown-content">
 '.$VALUE_all_specifications_key_type.'
</div>
</div>
</div>
';	


$child_specifications_child_specifications_add_one = child('div','child_specifications_child_specifications_add_one'.$counter_k.'','




  <div class="container melo_gray slide-in-top">
        <div class="row">
            <div class="col-12">
                <div class="mt-4 mb-4">
                    <form>
'.$specifications_chooser.'

<div class="melo_gray">

<input type="hidden" name="product_id" class="input_m_form" value="'.$product_id.'">

<div id="specification_type_value" class="dear_element mb-5"></div>

</div>
      
				


<div class="mt-2 mb-2 d-flex justify-content-around">
<a id="form_submit" data-query="insert_to_(specifications)&if_uniques=limit_specifications&when='.$idx.'&next=open_inside&module_name=child_template_specifications&product_id='.$product_id.'&product_name='.$product_name.'" locate-at="specifications_section"  data-msg="'.$read_t['switcher'].'" class="myAccount-buttons border px-3 py-2 h5 btn_id" >افزودن ویژگی</a>

<a onclick="clear_me(\'put_child_specifications_add_one\')" class="myAccount-buttons border px-3 py-2 h5" >انصراف</a>
</div>


                    </form>
         </div>  
 </div>
 </div> </div>
 
 
 
 
 
 
 
');


?>