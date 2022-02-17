<?php

$dir="./app/views/html/modules/";
	$owned_urls= array(
 'insert_to_.php',
 'unsign_menu.php',	
 'header_bold_title.php',	
 'menu_nav.php');



if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
			if (strpos($file, '.php') !== false) {
				

if (in_array($file,$owned_urls)){
    
} else {
	$file= str_replace(".php","",$file);
$part1= $part1." {$file} ,";
$part1e= $part1e." {$file} =";

$part2= $part2." {$file}_submit ,";
$part2e= $part2e." {$file}_submit =";
}
				
				
				

        }
		}
        closedir($dh);
    }
}



$dir="./app/views/html/modules/child/";
	$owned_urls= array(
'dash_page.php',
 'insert_to_.php',
 'unsign_menu.php',	
 'header_bold_title.php',	
 'menu_nav.php');



if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
			if (strpos($file, '.php') !== false) {
				

if (in_array($file,$owned_urls)){
    
} else {
	$file= str_replace(".php","",$file);
$part3= $part3." {$file}_submit ,";
$part3e= $part3e." {$file}_submit =";
}
				
				
				

        }
		}
        closedir($dh);
    }
}




$dir="./app/views/html/modules/mini/";
	$owned_urls= array(
'dash_page.php',
 'insert_to_.php',
 'unsign_menu.php',	
 'header_bold_title.php',	
 'menu_nav.php');



if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
			if (strpos($file, '.php') !== false) {
				

if (in_array($file,$owned_urls)){
    
} else {
	$file= str_replace(".php","",$file);
$part4= $part4." {$file}_submit ,";
$part4e= $part4e." {$file}_submit =";
}
				
				
				

        }
		}
        closedir($dh);
    }
}

$part1s = substr($part1 , 0, -1);


echo "
var $part1s ;
$part1e  function(param,who) {
 
app.setVar('run_executer', '1');
app.get_https(\"plt.php\"+\"?q=\"+param+\"&w=\"+who);

};
";
$part4 = substr($part4, 0, -1);



echo "
var  $part2 $part3 $part4;
 $part2e $part3e $part4e function(formname,who) {

   gather_form(formname,arguments.callee.name,who);
};

";

