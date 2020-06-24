<?php

spl_autoload_register('classAutoLoader');

function classAutoLoader($className){
    $path = "classes/";
    $ext = ".class.php";
    require_once  $path. $className .$ext;
}

