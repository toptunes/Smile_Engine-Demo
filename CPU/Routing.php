<?php


class Routing {

 private static $routing_t;

 private static $routing_head_inside;


	
    public static function GET_routing_t($s_case,$path,$module_name){
        
    
        
    self::$routing_t = [
        "load_example" => "example",
        "account/dashboard" => "profile"

    ];

		if($module_name !=""){
			$s_case = $module_name;
		}
		

		$s_case = ifempty_self( get_value( self::$routing_t , $s_case ), $path );
		

        
        return $s_case;


    }
    
    public static function GET_routing_head_inside($s_case,$module_name){
          
		if($module_name !=""){
			$s_case = $module_name;
		}
    /* 
    Some variables that you created before on modules, 
    Set them to  this array below and make Titles and Descriptions work dynamically

    also, you can add title and description inside the module dynamically with this method :

   	Routing::Set_routing_head_inside('product','

		my example.php has title
		
	');
		

	Routing::Set_routing_head_inside('product_description','
		
		my example.php description

	');

    */

 
    $title_exported= get_value(self::$routing_head_inside,strtok($s_case, '/'));
    $description_exported= get_value(self::$routing_head_inside ,strtok($s_case, '/')."_description");
    $author_exported= get_value(self::$routing_head_inside ,strtok($s_case, '/')."_author");

		
 
		
    $inside_head = '
    {
        "title": '.json_encode($title_exported).',
        "meta_name": [
            {"name=\'description\'":'.json_encode($description_exported).'},
            {"name=\'author\'":'.json_encode($author_exported).'}
        ]
    
        
    }
    ';



        return $inside_head;

    }
	
	public static function Set_routing_head_inside($key,$value){
		$keyc = trim($key);
		$valuec = trim($value);
		self::$routing_head_inside[$keyc] = $valuec;
		
	}
		
	public static function Get_routing_head_inside_value(){
		
		var_dump(self::$routing_head_inside);
		
	}
 

}