<?php

$uri = $_SERVER['REQUEST_URI'];


$route = [
    '/'=> 'Controllers/homeController.php',

];


if (array_key_exists($uri,$route)) {
    return require $route[$uri] ;
}else{
    return require "view/".Responce::PAGE_NOT_FOUND.'.php';
}


