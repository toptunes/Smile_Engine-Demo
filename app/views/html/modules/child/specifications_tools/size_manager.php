<?php






$tools_size_manager = child('div','tools_size_manager','

<select name="spec_value_string" array-type="1" class="py-2 my-2 form-control input_m_form" >
<option value="cm">سانتی متر</option>
<option value="mm">میلیمتر</option>
<option value="m">متر</option>
</select>

<input type="number" name="spec_value_string" array-type="1" class="py-2 my-2 form-control input_m_form" placeholder="طول" data-req="1" data-msg="مقدار ویژگی را بنویسید">

<input type="number" name="spec_value_string" array-type="1" class="py-2 my-2 form-control input_m_form" placeholder="عرض" data-req="1" data-msg="مقدار ویژگی را بنویسید">

<input type="number" name="spec_value_string" array-type="1" class="py-2 my-2 form-control input_m_form" placeholder="ارتفاع" data-req="1" data-msg="مقدار ویژگی را بنویسید">

<p class="py-2 my-2">
'.get_value($obj,'specifications_info').'
</p>
');