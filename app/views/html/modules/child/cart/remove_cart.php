<?php

$when= get_value($_GET,'when');
$p_name= get_value($_GET,'p_name');
$p_id= get_value($_GET,'p_id');
	
$dec = (array)json_decode(get_mysql("
SELECT * FROM `all_orders` WHERE `id` = $when AND `users_id` = $this->user_id
"));

for($idx =0; $idx < count($dec); $idx++){
    $obj_spec = (Array)$dec[$idx];

}
$howmany_wanted_Cart_remover = get_value($obj_spec,"how_many_wanted");

if($howmany_wanted_Cart_remover < 1){
$msg_rmover = "چیزی برای حذف وجود ندارد";

}elseif($howmany_wanted_Cart_remover == 1){
$msg_rmover = "
آیا میخواهید $p_name از سبد حذف شود؟
";
}elseif($howmany_wanted_Cart_remover > 1){

    $msg_rmover = "
    آیا میخواهید یک عدد از $p_name را از $howmany_wanted_Cart_remover عددی که در سبد خرید است , حذف شود؟
    ";   
}
$and_will_be = $howmany_wanted_Cart_remover-1;

$child_cart_remove_cart = child('div','child_cart_remove_cart','


<div class="border-top ">
    <p class="p-3">
        '.$msg_rmover.'
    </p>



    <form novalidate="" onsubmit="return false">
        <div class="btn-group ">
            <input type="hidden" name="how_many_wanted" value="'.$and_will_be.'" class="input_m_form">
            <button class="noradius m-2 btn abyekiha_bg btn-outline-secondary btn_id" type="button" id="form_submit"
                data-query="update_to_(all_orders)&when='.$when.'&next=cart"
                onclick="if_show_hide(\'s_popModal\');history.back(-1)"> بله </button>

            <button class="noradius m-2 btn btn-secondary" onclick="if_show_hide(\'s_popModal\');history.back(-1)"> خیر
            </button>
        </div>
    </form>
</div>



');


?>