<?php
require_once 'config/config.php';

define("ROOT", __DIR__);

spl_autoload_register(function($className) {
    $dirs = ["controllers", "models", "core"];
    foreach ($dirs as $dir){
        $file = "$dir/$className.php";
        if(is_file($file)){
            require_once $file;
            break;
        }
    }
});
$app = new Application();
$app->run();
