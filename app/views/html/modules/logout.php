<?php



setcookie("smile_k",$_SESSION["username"], time() - 3600,"/");
setcookie("smile_v",$_SESSION["password"],  time() - 3600,"/");
unset($_SESSION['users_r']);

session_unset();
session_destroy();
session_start();
$_SESSION['users_r'] = "";
$_SESSION['password']= "";
$_SESSION['username']= "";


	







