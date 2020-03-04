<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 05.03.2020
 * Time: 2:47
 */

spl_autoload_register(function ($name){
    $file = "class" . DIRECTORY_SEPARATOR . "{$name}.php";
    if(!file_exists($file))
        die ("{$file} doesnt't exist");
    include_once $file;

    if(!class_exists($name)){
        die("Class <b>{$name}</b>  doesnt't exist");
    }
});