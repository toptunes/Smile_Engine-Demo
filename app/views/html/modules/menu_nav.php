<?php
include "child/header/items/for_level_".$this->user_level.".php";

include "child/header/child_header_category.php";
include "child/header/child_header_advanced_menu.php";
include "child/side_bar/child_side_bar_menu.php";

include "child/footer/child_footer_tool_bar.php";

if($this->not_user == 1){
include "child/header/child_header_not_login.php";
	
	
 $app_nav = '
 
'.$child_header_not_login.'
'.$child_side_bar_menu.'
'.$child_footer_tool_bar.'

';	
	
}else{
include "child/header/child_header_with_login.php";
	
 $app_nav = '


'.$child_header_with_login.'
'.$child_side_bar_menu.'

'.$child_footer_tool_bar.'
	
';
		
}


?>