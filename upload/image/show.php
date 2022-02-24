<?php
/*
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1); 
*/

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);

$GET_name=$_GET['name'];

	
if (strpos($GET_name, '.jpg') !== false) {
	header ("Content-type: image/jpeg");
$img_jpeg_path = './images/'.$GET_name;
}
if (strpos($GET_name, '.jpeg') !== false) {
	header ("Content-type: image/jpeg");

$img_jpeg_path = './images/'.$GET_name;
}
if (strpos($GET_name, '.png') !== false) {
header ("Content-type: image/jpeg");
$outputFile_3="./images/".$GET_name . ".jpg";

$image = imagecreatefrompng("./images/".$GET_name);

  imagejpeg($image, $outputFile_3, 100);

$img_jpeg_path = $outputFile_3;
  imagedestroy($image);
}
	



if($GET_name == ""){
echo base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=');
die();

}

$dw = $_GET['width'];

$outputFile_4="./images_thum/".$GET_name ."_".$dw.".jpg";

if( file_exists($outputFile_4)){
header('Pragma: public');
header('Cache-Control: max-age=86400');
header('Expires: '. gmdate('D, d M Y H:i:s \G\M\T', time() + 86400));


readfile($outputFile_4);
die();
}
	require_once('./system/php_image_magician.php');

	
	$magicianObj = new imageLib($img_jpeg_path);
        $magicianObj -> resizeImage($dw, $dw, auto, true);
	$magicianObj -> saveImage($outputFile_4, 100);
	
	readfile($outputFile_4);

die();

?>





