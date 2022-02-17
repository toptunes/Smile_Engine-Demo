<?php

include "switcher/database_keys.php";

$if_uniques = get_value($_GET,'if_uniques');

$success_add = get_value($_GET,'success');
$u_p_a_m = get_value($_GET,'upam');
$if_unique = get_value($_GET,'if_unique');

$msg = get_value($_GET,'msg');
$result_key= "";
$result_value= "";
$keyall="";
$valueall="";
$CON_RESULT="";
$html_error="";


$insert_data = json_decode($this->data_string);



if($if_uniques != ""){
	include "./switcher/uniques_patterns.php";
	include "if_uniques.php";
}
if($u_p_a_m != ""){
	include "./switcher/uniques_patterns_as_modules.php";
	include "if_uniques_as_modules.php";
	
}	

foreach($insert_data as $name => $value){

  $result_key .= "   `".$name."` ,";





if($if_unique != "" && $name == $if_unique){
$whatiwant = $name;
$whatihave = $value;
include "if_unique.php";
}

}
$result_key = substr($result_key, 0, -1);

foreach($insert_data as $name => $value){

/**********/

  $result_value .= "   '".$value."' ,";	
/**********/	
	
}
$result_value = substr($result_value, 0, -1);


$result = get_sql_as_list("DESCRIBE $this->tablename;");

$dec = json_decode($result);

for($idx = 0; $idx < count($dec); $idx++){
     $obj1 = (Array)$dec[$idx];


$tha=$obj1['Field'];

if (isset($tha) && array_key_exists($tha, $fidded) && array_key_exists($tha, $insert_data) == false) {
	
	$keyall .= " `$tha` ,";





$bah =$fidded["$tha"];
	
if (strpos($bah, '<element>') !== false ) {

$element = everything_in_tags($bah,'element');
$query = everything_in_tags($bah,'query');
$bah =   (Array)json_decode(get_mysql($query))[0]["$element"];
$valueall .= " '$bah' ,";	

}else{

	$valueall .= " $bah ,";	
}


}
	
}




if($html_error == ""){

$sql="INSERT INTO `".$this->tablename."` ($keyall $result_key) VALUES ($valueall $result_value);";


$CPU_conn = new conn();

$CONe = $CPU_conn -> getDBready() ;

  $CON_RESULT = $CPU_conn -> insert_sql($sql) ;

}


if(get_value($_GET,'next') !="" && $CON_RESULT == "1"){

include get_value($_GET,'next').".php";

}elseif(get_value($_GET,'next') !="" && $html_error_msg != ""){


include get_value($_GET,'next').".php";
	
}elseif(get_value($_GET,'next') == "" && $html_error_msg != ""){

$html_final = ' 

'.$html_error_msg.'
'.$html_if_uniques_as_modules.'
';


}elseif($success_add !="" && $CON_RESULT == "1"){

$html_final = '

'.get_value($switch,$success_add).'

';


}else{

$html_final = ' 
<div class="mit_menu">
'.$CON_RESULT.'
</div>
';


}
