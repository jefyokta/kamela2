<?php

use oktaa\Database\Seeder;
use Oktaax\Console;
use Swoole\Coroutine;


class Command
{

    private $commands = [
        "start" => "start the server",
        "make Controller <name>" => "make Controller",
        "test" => "run test code",
        "migrate" => "run database migrate",
        "db:seed" => "run database seeder"
    ];
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
            case "migrate":

                Coroutine::run(function () {
                    require_once __DIR__ . "/../init.php";

                    foreach (glob(__DIR__ . "/../Models/*.php") as $model) {

                        require  $model;

                        $modelName = basename($model, ".php");
                        $fullClassName = "Kamela\\Models\\" . $modelName;

                        if (class_exists($fullClassName)) {
                            $fullClassName::migrate();
                        } else {
                            echo "migration failed for $modelName\n";
                        }
                    }
                });
                break;

            case 'db:seed':
                require_once __DIR__ . "/../init.php";

                $seeder = new Seeder;
                $seeder->run();
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
                $template = Coroutine::readFile(__DIR__ . "/templates/Controller.okta");
                $data = str_replace('${name}', $name, $template);

                Console::info("creating {$name}Controller....\n");

                Coroutine::writeFile(__DIR__ . "/../Controllers/{$name}Controller.php", $data);
                break;

            default:
                # code...
                break;
        }
    }

    private function handleEmptyMake($kind) {}



    public function getCommands()
    {
        return $this->commands;
    }
}
