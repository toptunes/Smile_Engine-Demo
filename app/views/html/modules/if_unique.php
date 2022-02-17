<?php


$obj = (Array)json_decode(get_mysql("

SELECT * FROM `$this->tablename` where  `$whatiwant` = '$whatihave'

"))[0];


if($obj["id"] != "" ){


$html_final = " $msg";


}
