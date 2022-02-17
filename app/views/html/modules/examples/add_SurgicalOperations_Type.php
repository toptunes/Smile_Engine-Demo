<?php
// should return $html_final

include "data_Hospital_child_menu.php";



$html_final = '<div class="cover" id="cover"></div>

<div class="mit_menu">
<h2>ADD SurgicalOperations Type</h2>

'.$data_Hospital_child_menu.'


<form class="rowv">





<input class="input_m_form" type="text" data-req="1" name="Type" autocomplete="off" placeholder="'.$read_t['SurgicalOperations_Type'].'">


<div class="rowv">

<a  id="form_submit" data-query="insert_to_(j_ammals_t)" data-msg="'.$read_t['data_fill_all'].'" class="blockdiv_leftside btn btn_id">Save</a>

</div>
</form>
</div>

';
?>