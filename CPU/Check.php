<?php


class Check {

 
    public static function mas($path,$start){
        
        if($path == "mas"){
            
            include "./switcher/lanq_index.php";
            include "./switcher/security.php";
            include "./switcher/database_onstart.php";
            include "preload.php";

            $dbox = str_ireplace($findkey2,$replacevalue2,  $dbox);
            $time_elapsed_secs = microtime(true) - $start;
            $dbox = '{"run":"'.urlencode($dbox).'" ,"preload_html":"'.rawUrlEncode($preload_html).'" , "time_elapsed_secs":"'.$time_elapsed_secs.'" }';  
            echo ($dbox);
            die();
        }


    }

 

    public static function locateat($locateat){

        if($locateat=="null" || $locateat=="undefined" ){
            $locateat='';
        }

        return $locateat;

    }

    public static function other_method($other_method){

        if($other_method==""){
            $other_method = 1;
        }else{
            $other_method = str_replace('fill_','',$_GET['module_name'] ?? '');
        }

        return $other_method;
    }

}