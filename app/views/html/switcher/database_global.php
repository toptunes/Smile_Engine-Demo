<?php
session_start();

if(isset($data->username) && isset($data->password)){

    unset($_SESSION['users_r']);
    unset($_SESSION['store_type']);



    $username = $data->username;
    $password = hash('sha512',$data->password);


    $result = get_sql_as_list('
        UPDATE `users` SET password_hash =\''.$password.'\' WHERE username= \''.$data->username.'\' AND password =\''.$data->password.'\' 
    ');

    $hash_k = $username;
    $hash_v = $password;


    setcookie("smile_k", $hash_k , time() + (86400 * 30), "/");
    setcookie("smile_v", $hash_v , time() + (86400 * 30), "/");

}




if(isset($_COOKIE['smile_k']) && isset($_COOKIE['smile_k'])) {
    $username = $_COOKIE['smile_k'];
    $password = $_COOKIE['smile_v'];

}



/*
// server should keep session data for AT LEAST 1 hour
ini_set('session.gc_maxlifetime', 3600);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(3600);
*/







if(isset($_SESSION['users_r'])){
    
    $users_r= json_decode($_SESSION['users_r']);

    if(isset($users_r)){

        $obj = (Array)$users_r[0] ?? '';
        $username_check= $obj["username"] ?? '';
    if($username_check == 	$username){
        $o_db_t = '1';	
    }else{
        $o_db_t = '';		
    }
    }

}



if( $o_db_t == ""){


    $result = get_sql_as_list('
        SELECT username,id,f_name,img_0,level,l_name,users_id,store_name,store_t_name,category_stores_id FROM `users` WHERE username= \''.$username.'\' AND password_hash =\''.$password.'\' 
    ');


    $users_r = json_decode($result);

    $_SESSION['users_r'] = $result;


}else{

    $users_r= json_decode($_SESSION['users_r']);
    /*$users_r = json_decode(get_json('users',urldecode($o_db)));*/	
}



$obj = (Array)$users_r[0] ?? '';

$user_id= $obj["id"] ?? '';
$user_level= $obj["level"] ?? '';
$user_category_stores= $obj["category_stores"] ?? '';
if($user_id  == ""){
    $not_user =1;

}else{
    $not_user =0;	
}	

