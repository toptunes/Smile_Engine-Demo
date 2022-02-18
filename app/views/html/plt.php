<?php
   $memorystart =  round(memory_get_usage()/1048576,2).''.' MB';
   
   
   $preload_html = "";
   $html_final = "";
   $html_msg="";
   $el1="";
   $el2="";
   $el3="";
   $o_db="";
   $nav="";
   $user_sign_up="";
   $locateat="";
   
   $start = microtime(true);
   
   set_time_limit(10);
   /*
   error_reporting(E_ALL);
   ini_set('display_errors', 1);
   ini_set('display_startup_errors', 1); 
   */
   
   ini_set('display_errors', 0);
   
   
   define('24647ETW$@^&@%@%*#', TRUE);
   
   header('Content-Type: application/json');
   
   
   
   $json = file_get_contents('php://input');
   
   
   
   
   if (isset($_GET['q'])) $path = htmlspecialchars($_GET['q']);
   if (isset($_GET['nav'])) $nav = htmlspecialchars($_GET['nav']);
   if (isset($_GET['o'])){
    $other_method = htmlspecialchars($_GET['o']);
   }else{
   $other_method = "";
   }
   if (isset($_GET['locateat'])) $locateat = htmlspecialchars($_GET['locateat']);
   
   if($path==''){
   $nav =1;
   }
   
   include "./switcher/routing.php";
   
   
   $data = json_decode($json);


   /* 
   ..........................................
   Pay attention! some  "include" files will replace on release version (automatically)
   ..........................................
  */

   include "../../../CPU/conn.php";
   include "../../../CPU/fn.php";
   include "../../../CPU/get_ready.php";
   
   include "../../../CPU/switcher_index.php";
   
   
   include "./switcher/database_global.php";
   include "./switcher/render_element_patterns.php";
   
   
   
   
   if($path == "mas"){
   include "./switcher/lanq_index.php";
   
   include "./switcher/security.php";
   include "./switcher/database_onstart.php";
   include "./preload.php";
   
   $dbox = str_ireplace($findkey2,$replacevalue2,  $dbox);
   $time_elapsed_secs = microtime(true) - $start;
   $dbox = '{"run":"'.urlencode($dbox).'" ,"preload_html":"'.rawUrlEncode($preload_html).'" , "time_elapsed_secs":"'.$time_elapsed_secs.'" }';  
   
   echo ($dbox);
   
   die();
   }
   
   
   $switcher_index_obj = new switcher_index();
   
   if($nav==1){
   $app_nav = $switcher_index_obj -> getswitcher_nav($s_case,$not_user,$user_level,$user_id,$o_db) ;
   
   $app_nav = sanitize_output($app_nav);
   
   }else{
   $app_nav="";
   }
   
   $html_final = $switcher_index_obj -> getswitcher_case($s_case,$datacontentsjson,$tablename,$not_user,$user_level,$user_id,$o_db) ;
   
   $html_final = sanitize_output($html_final);
   
   /*$html_final=rawUrlEncode($html_final);*/
   
   
   
   $html_final=json_encode($html_final);
   $app_nav=json_encode($app_nav);
   
   /*$app_nav= rawUrlEncode($app_nav);*/
   
   
   
   if($locateat=="null" || $locateat=="undefined" ){
   $locateat='';
   }
   
   if($other_method==""){
   $other_method = 1;
   }else{
   //$other_method = str_replace('fill_','',$_GET['module_name'] ?? '');
   }
   
   $time_elapsed_secs = microtime(true) - $start;
   $memoryend = round(memory_get_usage()/1048576,2).''.' MB';
   
   
   //$fin_method = $method_select[''.$other_method.''] ?? '';
   
   
   
   /*echo '{"method_fill":"'.$fin_method.'", "elementbox" : "'.$locateat.'" , "case" : "'.$s_case.'" , "Access":"'.$other_method.'", "path":"'.$path.'", "app_msg":"'.$html_msg.'", "app_data":"'.$html_final.'", "password":"", "username":"" ,"app_nav":"'.$app_nav.'" ,"el":"'.$el1.'","el2":"'.$el2.'" ,"el3":"'.$el3.'" ,"time_elapsed_secs":"'.$time_elapsed_secs.'" ,"memorys":"'.$memorystart.'" ,"memorye":"'.$memoryend.'" }';*/
   
   echo '{"method_fill":"'.$fin_method.'", "elementbox" : "'.$locateat.'" , "case" : "'.$s_case.'" , "Access":"'.$other_method.'", "path":"'.$path.'", "app_msg":"'.$html_msg.'", "app_data":'.$html_final.', "password":"", "username":"" ,"app_nav":'.$app_nav.',"el":"'.$el1.'","el2":"'.$el2.'" ,"el3":"'.$el3.'" ,"time_elapsed_secs":"'.$time_elapsed_secs.'" ,"memorys":"'.$memorystart.'" ,"memorye":"'.$memoryend.'" }';
   
   ?>