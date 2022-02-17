<?php



$list_lanq_index = '{
"Access_denied":"Access denied",
"dashboard_home":"Home",
"data_Search":"Search . . . ",
"staff_FirstName":"First Name",
"staff_LastName":"Last Name",
"staff_personPost":"Person Post",
"staff_OfficePhoneNo":"Office Phone No",
"staff_StartDate":"Start Date",
"staff_EndDate":"End Date",
"city_name":"City Name",
"sign_up":"sign up",
"sign_up_title":"sign up title",
"enter_country_name":"enter your country name",




"opId":"134"}';




$read_t = json_decode($list_lanq_index,true);

  

$data_name_list = Array
(
'Hospitalname' => 'name_bimarestan',
'Hospitalprovince' =>'ostan',
'HospitalCity' =>'shahr',   
'HospitalType' =>'type_bimarestan',   
'HospitalSize' =>'size_bimarestan',
'FieldActivity' =>'serve_bimarestan',
'OrthopedistsNumber' =>'ortoped_number',
'LaparoscopistsNumber' =>'laparos_number',
'Needs' =>'hospital_needs',
'Equipment_ToolName' =>'ToolName', 
'Equipment_ToolBrand' =>'ToolBrand', 
'Equipment_ToolType' =>'ToolType', 
 
'Equipment_ToolInstallationDate' =>'ToolInstallationDate',   
'Equipment_ToolDepartureDate' =>'ToolDepartureDate'
    
);



     
$find       = array_keys($data_name_list);
$replace    = array_values($data_name_list);
$this->data_string = str_ireplace($find, $replace,  $this->data_string);     
$this->tablename= str_ireplace($find, $replace,  $this->tablename);     
     
          
     
     
                         
                         
                         
                         
                         
                         
                         
                         
?>