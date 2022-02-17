<?php
//$aege = hah('ar2Z6#S','en');
$aege = 0;
$VALUE_all = "";
$VALUE_all2 = "";


$result = get_sql_as_list("SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='abyekiha_app'");
$dec = json_decode($result);
for($idx = 0; $idx < count($dec); $idx++){
    $obj = (Array)$dec[$idx];

	if($obj["COLUMN_NAME"]!='id' and  $obj["COLUMN_NAME"]!='level'){
if (strpos($VALUE_all,$obj["COLUMN_NAME"]) == false) {
$VALUE_all=$VALUE_all.'
"name=\"'.$obj["COLUMN_NAME"].'\"":"name=\"'.$aege.'AB'.$idx.'X\"",
';
}
if (strpos($VALUE_all,$obj["TABLE_NAME"]) == false) {
$VALUE_all=$VALUE_all.'
"('.$obj["TABLE_NAME"].')":"('.$aege.'BA'.$idx.'Z)",
';
}
	}
	
}

for($idx = 0; $idx < count($dec); $idx++){
    $obj = (Array)$dec[$idx];

	if($obj["COLUMN_NAME"]!='id' and  $obj["COLUMN_NAME"]!='level'){
if (strpos($VALUE_all2,$obj["COLUMN_NAME"]) == false) {
$VALUE_all2=$VALUE_all2.'
"'.$obj["COLUMN_NAME"].'":"'.$aege.'AB'.$idx.'X",
';
}
if (strpos($VALUE_all2,$obj["TABLE_NAME"]) == false) {
$VALUE_all2=$VALUE_all2.'
"'.$obj["TABLE_NAME"].'":"'.$aege.'BA'.$idx.'Z",
';
}
	}
	
}

$VALUE_all = "{".$VALUE_all.' "<<>>":"2241"}';
$VALUE_all2 = "{".$VALUE_all2.' "<<>>":"2241"}';
$data_security_list = json_decode($VALUE_all,true);
$data_security_list2 = json_decode($VALUE_all2,true);

$findkey       = array_keys($data_security_list);
$replacevalue    = array_values($data_security_list);

$findkey2       = array_keys($data_security_list2);
$replacevalue2   = array_values($data_security_list2);


function hah($string, $action = 'en')
{
    $encrypt_method = "AES-256-CBC";
    $secret_key = '24t24to24bg2o4ibg2to4ut2o'; 
    $secret_iv = '5fgf5HJ5g27'; 
    $key = hash('sha256', $secret_key);
    $iv = substr(hash('sha256', $secret_iv), 0, 5);
    if ($action == 'en') {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if ($action == 'de') {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}


 