<?php
include "child/loop/child_loop_only_city_name_select.php";


$html_final = module('div','get_data_add_city','











<form>
  <label>'.$switch['enter_country_name'].'</label>
  <select name="city_name" class="input_m_form" id="cars">

'.$child_loop_only_city_name_select.'
  
  
  </select>
  <br><br>
<a  id="form_submit" data-query="insert_to_(city_all)" data-msg="'.$read_t['switcher'].'" class="btn_id">'.$read_t['save_it'].'</a>
</form>

');