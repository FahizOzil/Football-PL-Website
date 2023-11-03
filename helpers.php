<?php


function dd($val){
 echo "<pre>";
 var_dump($val);
 echo "</pre>";
 die();
}


function view($path,$param=[]){
   extract($param);
   
   return require "view/$path.php";
}

function abort($val){
    require "view/$val.php";
}
