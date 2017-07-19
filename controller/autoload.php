<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function autoload($class)
{

    # List all the class directories in the array.
    $array_paths = array(
        '../model/',
        '../controller/',
        '../view/'
    );

    foreach ($array_paths as $path) {
        $file = sprintf('%s/%s.php', $path, $class);
        if (is_file($file)) {
            include_once $file;
        }
    }
}

spl_autoload_register('autoload');
