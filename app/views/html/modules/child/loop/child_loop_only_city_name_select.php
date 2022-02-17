<?php


$dec = (Array)json_decode(get_mysql("

SELECT * FROM `city_all` 

"));


$child_loop_only_city_name_select="";		
for($idx = 0; $idx <  count($dec); $idx++){ 
	$obj = (Array)$dec[$idx];
	
	
	
$child_loop_only_city_name_select .= child('div','child_loop_only_city_name_select','

   <option value="'.$obj['city_name'].'">'.$obj['city_name'].'</option>
   

');

										  
}
/*


	<form>
<input class="input_m_form" type="text" data-req="1" name="city_name" value="'.$obj['city_name'].'" autocomplete="off" placeholder="">
<a  id="form_submit" data-query="update_to_(city_all)&when='.$obj["id"].'&next=add_city" data-msg="'.$read_t['switcher'].'" class="btn btn-dark float-end btn_id">'.$switch['save_it'].'</a>

</form>*/
?>