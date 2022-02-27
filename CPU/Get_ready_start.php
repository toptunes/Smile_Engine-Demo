<?php

class Get_ready_start
{

  


    public static function GetUrlQuery($param){
       
        $export = "";

        $export = htmlspecialchars(get_value($_GET,$param));

        return $export;
        

      

    }

 

    public static function GetUrlJsonAsArray(){

        $json = "";

        $json = file_get_contents('php://input');
        
            

        return json_decode($json);
       
    }
    
    public static function GetinsideParenthesis($param,$if_empty){

        $export = "";

        preg_match('#\((.*?)\)#', $param, $match);
        $export = $match[1] ?? '';
        if($export == "" || $export == "null"){
            $export = $if_empty;
        }

        return $export;
       
    }
    public static function ifEmpty_Or_Null($param,$if_empty,$orelse){

        $export = "";

        if($param == "" || $param == "null"){
            $export = $if_empty;
        }else{
            $export=$orelse;
        }
        return $export;

    }
    public static function Checkisset($param,$put,$if_not){

        $export = "";
        
        if(isset($param)){

            if($put ==1)
                $export = $param;
            else
                $export = $put;

        }else{
            $export = $if_not;
        }
        return $export;

    }

}

