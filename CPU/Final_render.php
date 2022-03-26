<?php


class Final_render
{

    public $path;
    private $nav;
    private $locateat;
    private $other_method;
	public $module_name;

    public function __construct()
    {
        $this->path = Get_ready_start::GetUrlQuery("q");

        $this->nav = Get_ready_start::GetUrlQuery("nav");

        $this->locateat = Get_ready_start::GetUrlQuery("locateat");
		
		$this->module_name = Get_ready_start::GetUrlQuery("module_name");
		
        $this->other_method = Get_ready_start::GetUrlQuery("o");

		
      
    }

    public function export()
    {

        $memorystart =  round(memory_get_usage()/1048576,2).''.' MB';

        $preload_html="";
        $html_final="";
        $html_msg="";
        $el1="";
        $el2="";
        $el3="";
        $o_db="";
        $not_user = 1;
        $user_sign_up="";
        $user_level = "";
        $user_id = 0;
        $username="";
        $password="";
        $r_path ="";
        $datacontent ="";
 		$this_mod ="";
		
        $start = microtime(true);

        $data = Get_ready_start::GetUrlJsonAsArray();
        
        
        $datacontent = isset($data->datacontent) ? Get_ready_start::Checkisset($data->datacontent,"1","") : "";
        

        $s_case = isset($data->s_case) ? Get_ready_start::Checkisset($data->s_case,"1","") : "";

        $o_db = isset($data->o_db) ? Get_ready_start::Checkisset($data->o_db,"1","") : "";
		
 	
		

        $datacontentsjson = Get_ready_start::Checkisset($datacontent,'{'.$datacontent.'}','{ "run":"1" }');
      

        $datacontents = Get_ready_start::Checkisset($datacontent,''.$datacontent.',','');
        

        $s_case = Get_ready_start::ifEmpty_Or_Null($this->path,"dash_page",$this->path);

        $tablename = Get_ready_start::GetinsideParenthesis($s_case,"1");

		
        $s_case= str_replace("($tablename)", "",  $s_case);     
		
		
        $s_case = Routing::GET_routing_t($s_case,$this->path,$this->module_name);

   
        include "./switcher/render_element_patterns.php";
        include "./switcher/database_global.php"; // check and set COOKIE


        check::mas($this->path,$start);

       
        $switcher_index_obj = new switcher_index();

        if($this->nav==1){
            
            $app_nav = sanitize_output($switcher_index_obj -> getswitcher_nav($s_case,$not_user,$user_level,$user_id,$o_db)) ;
    
    
        }else{
    
            $app_nav="";
    
        }


        $html_final = sanitize_output($switcher_index_obj -> getswitcher_case($s_case,$datacontentsjson,$tablename,$not_user,$user_level,$user_id,$o_db));


        /*$html_final=rawUrlEncode($html_final);*/

        $html_final=json_encode($html_final);
        $app_nav=json_encode($app_nav);

        /*$app_nav= rawUrlEncode($app_nav);*/

        $this->locateat = check::locateat($this->locateat);

        $this->other_method = check::other_method($this->other_method);


        $time_elapsed_secs = microtime(true) - $start;

        $memoryend = round(memory_get_usage()/1048576,2).''.' MB';

        $fin_method = get_value($method_select,$this->other_method);

		$inside_head = Routing::GET_routing_head_inside($s_case,$this->module_name);
		
		
		
        return '{"inside_head":'.$inside_head.',"method_fill":"'.$fin_method.'", "elementbox" : "'.$this->locateat.'" , "case" : "'.$s_case.'" , "Access":"'.$this->other_method.'", "path":"'.$this->path.'", "app_msg":"'.$html_msg.'", "app_data":'.$html_final.', "password":"", "username":"" ,"app_nav":'.$app_nav.',"el":"'.$el1.'","el2":"'.$el2.'" ,"el3":"'.$el3.'" ,"time_elapsed_secs":"'.$time_elapsed_secs.'" ,"memorys":"'.$memorystart.'" ,"memorye":"'.$memoryend.'" }';


    }


}