<?php
ini_set('display_errors', 1); 
header('Content-type: application/json');
if(isset($_FILES['photo']))
{


 if($_FILES["photo"]["type"] != "image/jpeg" && $_FILES["photo"]["type"] != "image/png")
  {
$data = array(
		'status'		=>	'فقط عکس مجاز است - این پیام بعد از 9 ثانیه حذف میشود'
	);

	echo json_encode($data);
die();
 
  }



	$extension = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);

	$new_name = $_GET['filename'];


$allowedFiles =  array('png', 'jpg', 'jpeg'); 

if(!in_array($extension , $allowedFiles) ) {

$data = array(
		'status'		=>	'فقط عکس jpg و png مجاز است - این پیام بعد از 9 ثانیه حذف میشود'
	);

	echo json_encode($data);
die();
}


	move_uploaded_file($_FILES['photo']['tmp_name'], 'images/' . $new_name);

	$data = array(
		'status'		=>	'1'
	);

	echo json_encode($data);




}