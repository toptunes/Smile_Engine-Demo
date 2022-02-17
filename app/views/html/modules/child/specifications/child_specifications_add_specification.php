<?php



//$add_city_data = (Array)json_decode(get_mysql("SELECT * FROM `city_all`  limit 7"))[0];






$child_specifications_child_specifications_add_specification = child('div','child_specifications_child_specifications_add_specification'.$_GET["counter"].'','


  <div class="container melo_gray slide-in-top">
        <div class="row">
            <div class="col-12">
                <div class="mt-4 mb-4">
                    <form>
						


<div class="c_box melo_gray">
<div class="p-1">
<div class="row ">
<p>مقدار ویژگی را با چه فرمی وارد میکنید؟</p>
<div class="col-4">
<a href="" class="btn_id w-100 myAccount-buttons border px-2 py-1 h5">
متن
</a>
</div>
<div class="col-4">
<a href="" class="btn_id w-100 myAccount-buttons border px-2 py-1 h5">
عدد
</a>
</div>
<div class="col-4">
<a href="" class="btn_id w-100 myAccount-buttons border px-2 py-1 h5">
متن بلند
</a>
</div>
</div>

</div>

<div>
<div id="value_type_title"></div>

<input type="hidden" name="product_id" class="input_m_form" value="'.$product_id.'">

<textarea id="inbox'.$counter_k.'" class="py-2 my-2 form-control input_m_form jm" type="text" data-req="1" name="spec_value_string" autocomplete="off" placeholder="مقدار ویژگی اینجا بنویسید" style="margin-top: 8px; margin-bottom: 8px; height: 147px;">'.$spec_value.'</textarea>
</div>
	 
</div>
      
				


<div class="col-6">
<a id="form_submit" data-query="insert_to_(specifications_kinds)next=open_inside&module_name=child_specifications_add_specification"  data-msg="'.$read_t['switcher'].'" class="btn btn-dark float-end btn_id" >افزودن ویژگی</a>
</div>

                    </form>
         </div>  
 </div>
 </div> </div>
 
 
 
 
 
 
 
');


?>