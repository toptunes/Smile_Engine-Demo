<?php

spl_autoload_register(function ($class_name) {
    include __DIR__."/CPU/".$class_name . '.php';
});

// These are not classes.
include __DIR__."/app/views/html/switcher/routing.php";
include __DIR__."/CPU/fn.php";
include __DIR__."/CPU/get_ready.php";
include __DIR__."/app/views/html/switcher/database_global.php";
include __DIR__."/app/views/html/switcher/render_element_patterns.php";

?>
