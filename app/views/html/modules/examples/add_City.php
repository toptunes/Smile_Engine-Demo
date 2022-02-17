<?php
// should return $html_final

include "data_Hospital_child_menu.php";



$html_final = '<div class="cover" id="cover"></div>

<div class="mit_menu">
<h2>ADD city</h2>

'.$data_Hospital_child_menu.'


<form class="rowv">





<input class="input_m_form" type="text" data-req="1" name="city_name" autocomplete="off" placeholder="'.$read_t['city_name'].'">


<div class="rowv">

<a  id="form_submit" data-query="insert_to_(city_all)" data-msg="'.$read_t['data_fill_all'].'" class="blockdiv_leftside btn btn_id">Save</a>

</div>
</form>
</div>

';
?>