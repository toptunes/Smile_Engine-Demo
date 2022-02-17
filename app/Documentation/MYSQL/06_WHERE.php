<?php
$sql ="SELECT * FROM Products WHERE userid = '156'  ";
?>

SELECT = یعنی انتخاب کن یا بگیر

* = همه چی را 

FROM = از

Products جدولی که نامش محصولات است

WHERE جایی که

userid آی دی کاربر

'156' = 156 مساوی است با

میدونید این کجا کاربرد داره؟؟؟ جایی که میخوایم لیست محصولاتی که کاربر آپلود کرده رو در کنترل پنلش بهش نشون بدیم

حالت های دیگر به این صورت است

<?php
// وقتی که یوزر آی دی بزرگ تر از 156 است
$sql ="SELECT * FROM Products WHERE userid > '156'  ";
?>


<?php
// وقتی که یوزر آی دی کوچک تر از 156 است
$sql ="SELECT * FROM Products WHERE userid < '156'  ";
?>

<?php
// وقتی که یوزر آی دی بزرگ تر یا مساوی با 156 است
$sql ="SELECT * FROM Products WHERE userid >= '156'  ";
?>

<?php
// وقتی که یوزر آی دی کوچک تر یا مساوی با 156 است
$sql ="SELECT * FROM Products WHERE userid <= '156'  ";
?>

<?php
//  وقتی که یوزر آی دی مساوی نیست با 156
$sql ="SELECT * FROM Products WHERE userid != '156'  ";
?>

<?php
//  وقتی که یوزر آی دی بین 44 و 22 است
$sql ="SELECT * FROM Products WHERE userid BETWEEN 44 AND 22  ";
?>

<?php
//  فقط اونایی که نام شهرشون تهران و مشهده 
$sql ="SELECT * FROM city_all WHERE city_name IN ('تهران','مشهد');  ";
?>





