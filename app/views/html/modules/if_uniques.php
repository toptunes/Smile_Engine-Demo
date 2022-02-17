<?php


$obj_if_uniques = (Array)json_decode(get_mysql("

SELECT * FROM `$this->tablename` where  ".$uniques_patterns[''.$if_uniques.'']."

"))[0];
/*
die("

SELECT * FROM `$this->tablename` where  ".$uniques_patterns[''.$if_uniques.'']."

");*/
if(get_value($obj_if_uniques,"id") != "" ){

$html_error_msg	= get_value($uniques_patterns,''.$if_uniques.'_msg');

if(get_value($uniques_patterns,''.$if_uniques.'_cols') != ""){
	
$html_error_msg = print_like_printf($html_error_msg,$obj_if_uniques,get_value($uniques_patterns,''.$if_uniques.'_cols'));

}
	
$html_error = 1;
$html_final = "<msg>$msg</msg>";


}else{
$html_error_msg	= "";
$html_error = "";
$html_final = "";	
}

