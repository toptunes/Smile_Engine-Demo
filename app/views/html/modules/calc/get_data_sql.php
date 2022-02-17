<?php



$obj = (Array)json_decode(get_mysql("SELECT * FROM `users` "))[0];



$get_data_sql = calc('div','get_data_sql','

'.$obj["id"].'

'.$obj["username"].'

');








