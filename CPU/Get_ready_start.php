<?php

class Get_ready_start
{

    public static function GetUrlQuery($param){

       
        $export = htmlspecialchars(get_value($_GET,$param));

        return $export;
        

      

    }

    public static function GetUrlJsonAsArray(){

        $json = file_get_contents('php://input');

        return json_decode($json);
       

        
    

    }
}

