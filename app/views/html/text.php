<?php

$content=file_get_contents('modules/add_city.php');
echo str_replace('foo', 'cool', $content);

