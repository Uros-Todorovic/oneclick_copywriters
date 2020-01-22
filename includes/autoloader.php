<?php

function auto_loader($class){
    $path = "admin/includes/" . $class . ".php";

    if (is_file($path)) {
        require($path);
    }
}

spl_autoload_register('auto_loader');