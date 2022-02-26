<?php
/* 
_______________

If you want to see this open the link => localhost/add_category  OR yourdomain.com/add_category  OR http://127.0.0.1/add_category
_______________ 
*/

/*
_______________

the first parameter is 3. which means this module is only for users with level 3 ( check the user table in MySQL )

$Access_p=Access_permission("3",$this->user_level,$this->not_user);

_______________
*/



include 'child/loop/child_loop_category_name_list.php';




$html_final = module('div','add_category','


<div class="container fade-in mb-5">
   <div class="container">
      <div class="row">
         <div class="col-md-4 offset-md-4">
            <div class="login-form bg-light mt-4 p-4">
               <form class="row g-3">
                  <h4>HTML</h4>
                  <div class="col-12">
                     <input class="form-control input_m_form jm" type="text" data-req="1" name="category_name" autocomplete="off" placeholder="">
                  </div>
                  <div class="col-12">
                     <p>این چه سطحی دارد؟  0 و 1 و 2</p>
                     <input class="form-control input_m_form jm" type="number"  data-req="1" name="category_level" autocomplete="off" value="0">
                  </div>
                  <div class="col-12">
                     <p>اگر دسته بندی ای که قصد اضافه کردن اش را داری زیر مجموعه ی فلان دسته بندی است در گزینه زیر آی دی آن دسته بندی را بنویس</p>
                     <input class="form-control input_m_form jm" type="number"  data-req="1" name="category_child" autocomplete="off" value="0">
                  </div>
                  <div class="col-12">
                     <a  id="form_submit"  data-query="insert_to_(category_all)&next=add_category&if_unique=category_name" data-msg="'.$switch['data_fill_all'].'" class="btn btn-dark float-end btn_id">'.$switch['submit_title'].'</a>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div>
      <div class="row">
         <div class="col-3 p-4">آی دی</div>
         <div class="col-3 p-4">زیر مجموعه</div>
         <div class="col-3 p-4">نام دسته بندی</div>
         <div class="col-3 p-4">ویرایش</div>
      </div>
      '.$child_loop_category_name_list.'
   </div>
</div>
 
            

');

/*
Use this link to run The module on click

<a href="/add_category" id="fill_it" data-query="fill_it&o=2&module_name=fill_user_sign_up" class="btn_id">Link name</a>

*/


?>