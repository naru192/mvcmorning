<?php
class Autoload{
    public function __construct()
    {
        $controller = "ProductController";
        $method = "index";
        $path = "apps/controllers/$controller.php";
        if(file_exists($path)){
            require_once $path;
            $cobj = new $controller();
            $cobj->$method();
        }
    }
}
?>