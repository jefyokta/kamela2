<?php 


require_once __DIR__ . "/../vendor/autoload.php";

require_once __DIR__."/config/config.php";
require_once __DIR__."/../database/Database.php";




foreach (glob(__DIR__ . '/Middlewares/*.php') as $file) {
    require_once $file;
}

foreach (glob(__DIR__ . '/Controllers/*.php') as $file) {
    require_once $file;
}