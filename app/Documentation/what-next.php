را بخوانید و بلد باشید submit_form.php قبل از خواندن این نمونه کد حتما کد


درکل ثبت فرم ما این بخش را داشتیم
insert_to_(tablename)

به لینک زیر نگاه کنید
<a  id="form_submit" data-query="insert_to_(tablename)" data-msg="'.$read_t['switcher'].'" class="btn_id">'.$read_t['switcher'].'</a>


حالا ما لینک بالا را به لینک زیر تغییر میدهیم

<a  id="form_submit" data-query="insert_to_(tablename)&next=sign_up" data-msg="'.$read_t['switcher'].'" class="btn_id">'.$read_t['switcher'].'</a>

فرق این با بالایی چیست؟

این یعنی اگر بر روی ثبت فرم کلیک شد همان اتفاق باید بیفتد اما بعد از انجام فرایند به صورت خودکار ماژول دیگری را باز کند

 است sign_up که در این کد ماژول بعدی 


یک نکته مهم اگر این قابلیت استفاده کردید باید حالت زیر را در هر ماژول خالی ایجاد کنید

<?php

$html_final= $html_msg.'


';

?>