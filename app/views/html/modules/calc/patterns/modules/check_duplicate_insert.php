<?php
$and_will_be = get_value($obj_if_uniques,"how_many_wanted")+$insert_data->how_many_wanted;

$calc_patterns_modules_check_duplicate_insert = calc('div','calc_patterns_modules_check_duplicate_insert','

<div class="border-top ">
<p class="p-3">
آیا میخواهید '.$insert_data->how_many_wanted.' عدد دیگر اضافه شود؟
</p>



<form>
<div class="btn-group " >
<input type="number" name="how_many_wanted" value="'.$and_will_be.'" class="input_m_form">
<button class="m-2 btn abyekiha_bg btn-outline-secondary btn_id" type="button" id="_submitproduct(12)" who-id="mod_product" data-query="update_to_(all_orders)&when='.get_value($obj_if_uniques,"id").'&success=cart_add_success" locate-at="idoflocation" at-end="run_s_pop"> بله </button>

<button class="m-2 btn btn-secondary" onclick="if_show_hide(\'s_popModal\');history.back(-1)"> خیر </button>
</div>
</form>
</div>

');