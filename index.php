<?php
spl_autoload_register(function ($classname) {
    $path = "apps/libs/$classname.php";
    if(file_exists($path)){
        require_once $path;
    }
});
$obj = new Autoload();
?>