<?php






$tools_text = child('div','tools_text','

<input type="text" name="spec_value_string" class="py-2 my-2 form-control input_m_form" placeholder="مقدار ویژگی را بنویسید" data-req="1" data-msg="مقدار ویژگی را بنویسید">

<p class="py-2 my-2">
'.get_value($obj,'specifications_info').'
</p>
');