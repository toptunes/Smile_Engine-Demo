<?php






$tools_textarea = child('div','tools_textarea','

<textarea  name="spec_value_string" class="py-2 my-2 form-control input_m_form" style="height: 249px;" placeholder="مقدار ویژگی را بنویسید" data-req="1" data-msg="مقدار ویژگی را بنویسید"></textarea>

<p class="py-2 my-2">
'.get_value($obj,'specifications_info').'
</p>
');