<?php




$olay =$_GET['only'];
if($olay == ""){
$olay = '*';	
}
$check_data = json_decode($this->data_string);


foreach($check_data as $name => $value){
$result= $result."   `".$name."` = '".$value."' AND";
}
	

$result = substr($result, 0, -3);



$sql="SELECT $olay FROM  `".$this->tablename."` WHERE $result";


$result = get_sql_as_list($sql);

$dec = json_decode($result);

for($idx = 0; $idx < count($dec); $idx++){
    $obj = (Array)$dec[$idx];
$VALUE_all=$VALUE_all.'
  <tr>
        <td>'.$obj["id"].'</td>
        <td>'.$obj["date"].'</td>
      </tr>
';
}



if($obj["id"]!=""){
if($_GET["next"] !=""){
$html_final = ' 
<div class="mit_menu">
'.$VALUE_all.'
</div>
';

}else{
$html_final = ' 
<div class="mit_menu">
'.$VALUE_all.'
</div>
';

}
}else{
	$html_msg = ' 
<div class="mit_menu">
اطلاعات وارد شده غلط است . دوباره تلاش کنید
</div>
';
include $_GET["next"].".php";
}
