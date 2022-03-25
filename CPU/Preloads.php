<?php


class Preloads {


 private static $Preload_html_data_as_array;

	
	public static function add_to_preload($key,$value){

      
		$keyc = trim($key);
		$valuec = trim($value);
		self::$Preload_html_data_as_array[$keyc] = $valuec;
	}
		
    public static function get_preload_data(){
	
        return  self::$Preload_html_data_as_array;
		
	}
 

}

?>