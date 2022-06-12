<?php
spl_autoload_register(function ($class) {
    $dirs = array('components', 'controllers', 'models');
    foreach ($dirs as $dir) {
        $filePath = "$dir/$class.php";
        if (file_exists($filePath)) {
            require_once($filePath);
            break;
        }
    }
});