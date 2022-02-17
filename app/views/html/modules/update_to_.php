<?php
$Access_p=Access_permission("1",$this->user_level,$this->not_user);

$update_pattern =get_value($_GET,'pattern');
$when =get_value($_GET,'when');
$msg_rslt =get_value($_GET,'msg');
if($msg_rslt == ""){
$msg_rslt = "با موفقیت انجام شد";
}

$check_data = json_decode($this->data_string);

$resultaa="";
foreach($check_data as $name => $value){
	

$resultaa= $resultaa."   `$name` = '$value' ,";

}
	

$resultaa= substr($resultaa, 0, -1);


if($update_pattern !=""){
$sql = "UPDATE `$this->tablename` SET ".get_value($update_to_pat,$update_pattern)." WHERE `$this->tablename`.`id` = '$when' and `$this->tablename`.`users_id` = $this->user_id; ";
	

	
}else{
$sql="
UPDATE `$this->tablename` SET $resultaa WHERE `$this->tablename`.`id` = '$when' and `$this->tablename`.`users_id` = $this->user_id; 
";
}




$result = update_mysql($sql);


if(get_value($_GET,'next') =="null"){
$html_final = ' 

';
}else{
if(get_value($_GET,'next')  ==""){

if($result ==1){
$html_final = ' 

'.$msg_rslt.'

';
}

}else{
if($result ==1){
$html_final = ' 

'.$msg_rslt.'

';
include get_value($_GET,'next').".php";
}else{
$html_final = ' 
<msg>'.$sql.'
ثبت فرم با خطا مواجه شد
</msg>
';
}

}
}