روش انتخاب جدول از mysql
<?php
$sql ='SELECT * FROM city_all ORDER BY id DESC';
?>
SELECT = یعنی انتخاب کن یا بگیر

 * = همه چی را

FROM = از


city_all جدولی که نامش این است


ORDER BY id DESC چینش بر اساس آی دی که جدید ترین ها بالا و قدیم تر ها پایین
ORDER BY id ASC چینش بر اساس آی دی قدیمی تر ها بالا یا اول

