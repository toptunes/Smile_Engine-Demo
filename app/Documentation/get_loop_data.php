<?php



$dec = json_decode(get_mysql("

SELECT * FROM `tablename`

"));


for($i = 0; $i  < count($dec); $i ++){
    $obj = (Array)$dec[$i];
	
$get_loop_data .= child('div','get_loop_data','


'.$obj['id'].'
   
'.$obj['date'].' 
  
'.$obj['other'].'



');

	
}	
?>

