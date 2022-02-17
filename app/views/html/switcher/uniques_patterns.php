<?php

$insert_data = json_decode($this->data_string);

$uniques_patterns_index = '{

"limit_specifications"  : "`product_id` = \''.$insert_data->product_id.'\' and `spec_value_string` = \''.$insert_data->spec_value_string.'\' and `spec_key` = \''.$insert_data->spec_key.'\'  and `users_id` = \''.$this->user_id.'\' ",
"limit_specifications_msg"  : "مشابه این ویژگی را قبلا اضافه کردید و میتوانید در جدول پایین صفحه ویرایش کنید",

"add_to_all_stores"  : "`color_picked` = \''.$insert_data->color_picked.'\' and `product_id` = \''.$insert_data->product_id.'\' and `users_id` = \''.$this->user_id.'\'",

"add_to_all_stores_msg"  : "شما {{0}} عدد از این محصول با این رنگ قبلا اضافه کرده اید <span  class=\"off-percent text-light m-1 rounded-pill mx-2 \" style=\"width: 40px;float:left; display: inline-flex;height: 40px; background:{{1}}\"></span><p class=\"m-2\">و در سبد خرید شما موجود است</p>",
"add_to_all_stores_cols"  : "how_many_wanted;color_picked",

"add_to_all_stores_NOCOLOR"  : "`color_picked` = \''.$insert_data->color_picked.'\' and `product_id` = \''.$insert_data->product_id.'\' and `users_id` = \''.$this->user_id.'\'",

"add_to_all_stores_NOCOLOR_msg"  : "شما {{0}} عدد از این محصول قبلا اضافه کرده اید <span  class=\"off-percent text-light m-1 rounded-pill mx-2 \" style=\"width: 40px;float:left; display: inline-flex;height: 40px; background:{{1}}\"></span><p class=\"m-2\">و در سبد خرید شما موجود است</p>",
"add_to_all_stores_NOCOLOR_cols"  : "how_many_wanted;color_picked",



"opId":"134"}';





$uniques_patterns = json_decode($uniques_patterns_index,true);


     
                         
                         
                         
                         
                         
                         
                         
                         
?>