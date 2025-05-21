<?php

use Oktaax\Console;
use Oktaax\Oktaax;

require_once __DIR__ . "/../../oktaax/vendor/autoload.php";

$app = new Oktaax;

$app->setServer('task_worker_num', 2);
$app->get('/', function ($req,$res) {
    xserver()->task("latex");
    $res->end("tunggu ya");
});

$app->on("task", function () {
    exec("pdflatex kerjapraktek.tex");
    return "";
});

$app->on("finish",function(){
    Console::info("latex converted !");
});

$app->listen(3000);
