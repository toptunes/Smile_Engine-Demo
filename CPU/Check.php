<?php


class Check {

 
    public static function mas($path,$start){
        
        // Check if query ?q= is mas (Just run one time on app start and do this stuff below)
        if($path == "mas"){
            
            // get arrays of lanquage and preloads
            include "./switcher/lanq_index.php";
            include "./switcher/security.php";
            include "./switcher/database_onstart.php";

           
            include "preload.php";
            
            $preload_data = Preloads::get_preload_data();

           
            // make sure that language arrays works on preload htmls
            $dbox = str_ireplace($findkey2,$replacevalue2,  $dbox);

            // time_elapsed_secs on end
            $time_elapsed_secs = microtime(true) - $start;

            // Manual json creation (helps you know what it is)
            $dbox = '{"run":"'.urlencode($dbox).'" ,"preload_html":'.json_encode($preload_data).' , "time_elapsed_secs":"'.$time_elapsed_secs.'" }';  
           
            echo $dbox;

            // KILL process. because we don't need any more
            die();

        }


    }

 

    public static function locateat($locateat){

        // locate at is the id of the element that we want to put HTML on it

        if($locateat=="null" || $locateat=="undefined" ){
            $locateat='';
        }

        return $locateat;

    }

    public static function other_method($other_method){

        // if you want to fill json on preload modules, other_method comes

        if($other_method==""){
            $other_method = 1;
        }else{
            $other_method = str_replace('fill_','',$_GET['module_name'] ?? '');
        }

        return $other_method;
    }

}