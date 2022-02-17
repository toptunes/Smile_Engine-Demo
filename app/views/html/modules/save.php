<?php
// should return $html_final

// 

include "child/header_bold_title.php";

include "child/child_footer.php";
include "child/child_side_bar.php";



if($this->not_user == 1){

	$VALUE_all = '
	
'.$header_bold_title.'
'.$child_side_bar.'
'.$child_footer.'

';
}else{
	$VALUE_all = '

'.$header_bold_title.'
'.$child_side_bar.'
'.$child_footer.'

';
}


$html_final= $html_msg.'



	'.$VALUE_all.'






';











?>