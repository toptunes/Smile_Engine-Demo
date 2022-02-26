<?php

spl_autoload_register(function ($class_name) {
    include __DIR__."/CPU/".$class_name . '.php';
});

include __DIR__."app/views/html/switcher/routing.php";
include __DIR__."app/views/html/switcher/render_element_patterns.php";
?>
