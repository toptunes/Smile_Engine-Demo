<?php
$Access_p=Access_permission("3",$this->user_level,$this->not_user);


$c_name = $_GET["c_name"];
$idx = $_GET["id"];
$t_name = $_GET["t_name"];
$type = $_GET["type"];
if($type==""){
$type = "text";	
}
$obj = (Array)json_decode(get_mysql("

SELECT * FROM `$t_name` WHERE id = '$idx'

"))[0];


$admin_editor_of_dynamic = child('div','admin_editor_of_dynamic'.$_GET["counter"].'','




  <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 mb-4 p-4">
                    <form class="row g-3">
						
     
     
	                <div class="col-12">
<input id="inbox'.$_GET["counter"].'" class="form-control input_m_form jm" type="'.$type.'" data-req="1" name="'.$c_name.'" autocomplete="off"  value="'.$obj[''.$c_name.''].'">

                        </div>
	 

				

 <div class="col-12">
						

<a  id="form_submit"  data-query="update_to_('.$t_name.')&when='.$_GET["id"].'&next='.$_GET["p_next"].'&module_name='.$_GET["p_module_name"].'"  data-msg="'.$read_t['switcher'].'" class="btn btn-dark float-end btn_id">'.$switch['edit_it'].'</a>
                        </div>
                    </form>
         </div>  
 </div>
 </div> </div>
');


?>