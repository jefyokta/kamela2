<?php

use Swoole\Coroutine;

class Command
{
    public function handle(array $argument)
    {

        switch ($argument[1]) {
            case 'start':

                require_once __DIR__ . "/../../index.php";
                break;

            case 'make':
                Coroutine::run(function () use ($argument) {
                    $this->make($argument[2], $argument[3]);
                });
                break;
            case "test":
                $test =  require __DIR__ . "/../Test/Test.php";
                $test->run();
                break;
            default:
                # code...
                break;
        }
    }

    public function make(string $kind, string $name = null)
    {

        switch ($kind) {
            case 'controller':
                $data =
                    "<?php 

namespace Kamela\\Controller;
                
use Oktaax\\Http\\Request;
use Oktaax\\Http\\Response;
                
class {$name}Controller 
{
    public function index(Request \$req, Response \$res)
    {
        \$res->end(\"Hello World \");
    }
}";
                Coroutine::writeFile(__DIR__ . "/../Controllers/{$name}Controller.php", $data);
                break;

            default:
                # code...
                break;
        }
    }

    private function handleEmptyMake($kind) {}
}
