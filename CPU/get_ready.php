<?php

$username="";
$password="";



if(!defined('24647ETW$@^&@%@%*#')) {
   die('error 24');
}















if(isset($data->datacontent)){
$datacontent = $data->datacontent;
}
if(isset($data->s_case)){
$s_case = $data->s_case;
}
if(isset($data->o_db)){
$o_db = $data->o_db;
}

if(isset($datacontent)){
 $datacontentsjson = '{'.$datacontent.'}';
    $datacontents = ''.$datacontent.',';
}else{
   $datacontentsjson = '{ "run":"1" }';  
}





if($path == "" || $path == "null"){
    $s_case = "dash_page";
}else{
    $s_case=$path;
}



preg_match('#\((.*?)\)#', $s_case, $match);

$tablename = $match[1] ?? '';

$s_case= str_replace("($tablename)", "",  $s_case);     


if($tablename == "" || $path == "null"){
    $tablename = 1;
}














