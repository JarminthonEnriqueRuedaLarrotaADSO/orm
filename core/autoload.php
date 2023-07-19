<?php
// core/autoload.php

spl_autoload_register(function ($className) {
    $classFile = __DIR__ . '/../' . str_replace('\\', '/', $className) . '.php';
    if (file_exists($classFile)) {
        require_once $classFile;
    }
});


function autoload ($clase){
    $url = str_replace('\\', '/', $clase) . '.php';
}
spl_autoload_register('autoload');
