<?php
//کلید های دیتابیس برای این ایجاد میشود که گرفتار تکرار موارد نشویم
if($this->user_id == ""){
$uuidd = 0;
}else{
$uuidd = $this->user_id;	
}	
$passmaker = str_pad(get_rnd_number(14), 14, '0', STR_PAD_LEFT);
$passsha512 = hash('sha512',$passmaker);
$fidded = array(
'id' => 'null',
'date' => 'now()',
'phone_active_code' => ''.str_pad(get_rnd_number(4), 4, '0', STR_PAD_LEFT).'',	
'example_query' =>"<query>SELECT * FROM `users` where id = '$this->user_id'</query><element>password</element>",

/*users  keys*/
'active' => '0',
'level' => '1',	
'deleted' => '0',	
'irid' => '0',
'email' => "''",	
'owner' => "'".md5(str_pad(get_rnd_number(27), 27, '0', STR_PAD_LEFT))."'",	
'users_id' =>''.$uuidd.'',
'username' =>''.str_pad(get_rnd_number(14), 14, '0', STR_PAD_LEFT).'',
'password' =>''.str_pad(get_rnd_number(14), 14, '0', STR_PAD_LEFT).'',	
'auto_u_p' =>'1',		
'users_username' =>''.database_onstart('users','username',$this->o_db,0) ?? '' .'',
'users_password' =>''.database_onstart('users','password',$this->o_db,0) ?? '' .'',
'password_hash'	=> "'".$passsha512."'",		
/*users  keys*/
	
'store_t_name' => "''",	
'category_stores' => "''",	
'category_stores_id' => '0',
	
/*add products keys*/
'done' => '0',
'img_0' =>"''",
'img_1' => "''",
'img_2' => "''",
'img_3' => "''",
'img_4' => "''",
'img_5' =>"''",
'img_6' => "''",
'img_7' =>"''",
'img_8' =>"''",
'img_9' =>"''",
'Breakable' =>'0',
'product_detail' =>"''",
'available' => '1',				
'carry' => '0',					
'p_l' =>'0',
'p_w' =>'0',
'p_h' =>'0',
'address' =>"''",
'store_name' =>"''",	
'category_id_2' => '0',		
	

/*add products keys*/
	
/*add specifications keys*/
'spec_key' =>"''",
'spec_value_string' =>"''",	
'spec_value_string_2' =>"''",		
'spec_value_num' =>'0',
'color_id' =>'0',
/*add specifications keys*/	
	
'color_picked' =>"''",			
'how_many_wanted' =>'0',		
'seen' =>'0',
'paid' =>'0',	
'when_selected_price' =>'0',		
	
'key' => 'value'	
);

