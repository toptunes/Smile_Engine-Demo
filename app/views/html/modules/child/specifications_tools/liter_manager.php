<?php






$tools_liter_manager = child('div','tools_liter_manager','

<select data-req="1" name="spec_value_string" array-type="1" class="py-2 my-2 form-control input_m_form" >

<option value="">واحد انتخاب کنید ( لیتر یا میلی لیتر؟ )</option>
<option value="l">لیتر</option>
<option value="ml">میلی لیتر</option>



</select>

<input type="number" name="spec_value_string" array-type="1" class="py-2 my-2 form-control input_m_form" placeholder="مقدار ویژگی را بنویسید" data-req="1" data-msg="مقدار ویژگی را بنویسید">

<p class="py-2 my-2">
'.get_value($obj,'specifications_info').'
</p>
');