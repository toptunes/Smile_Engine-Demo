<?php

$filename_path = get_value($uniques_patterns_as_modules,$u_p_a_m);
include "$filename_path.php";
$filename_path = str_replace('/','_',$filename_path);

$html_if_uniques_as_modules = ${$filename_path};

