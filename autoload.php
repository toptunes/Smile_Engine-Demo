<?php

spl_autoload_register(function ($class_name) {
    include __DIR__."/CPU/".$class_name . '.php';
});


?>
