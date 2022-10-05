<?php

spl_autoload_register(function ($className) {
    $classFile = 'vendor/' . str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
    if(file_exists($classFile)){
        include_once $classFile;
        return true;
    }
    return false;
});







//some object for testing
//k;jkljl
$test = new Test();
echo $test;
unset($test);