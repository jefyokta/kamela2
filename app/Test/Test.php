<?php

use Kamela\Models\Guest;
use Kamela\Models\House;
use Kamela\Models\Type;
use Kamela\Models\User;
use Oktaax\Console;
use Oktaax\Oktaa;
use Swoole\Coroutine;
use Swoole\Coroutine\Channel;

require_once __DIR__ . "/../init.php";

return new class
{
    public function run()
    {

        Coroutine::run(function () {

            var_dump($this->async());
        });
    }

    public function seed()
    {
        Guest::create([
            [
                "name" => "jefy oktamipa",
                "phone_number" => "6282255267294",
                "rumahid" => 1,
                "email" => "jefyokta50@gmail.com",
                "pekerjaan" => "softwarengineer",
                "metode" => 1,
                "document" => "fake.docx",
                "status" => null,
                "created_at" => "2024-09-10"
            ],
        ]);
    }

    private function tradtional()
    {
        echo "traditional" . PHP_EOL;
        sleep(10);
        echo "2" . PHP_EOL;
        sleep(5);
        echo "1" . PHP_EOL;
    }
    private function async()
    {

        // Coroutine::run(function () {
        $chan = new Channel(3);

        go(function () use ($chan) {
            $unsold = House::select("*")->where("status", '!=', 400)->run(true) ?? 0;
            $chan->push(['unsold' => $unsold]);
        });

        go(function () use ($chan) {
            $sold = House::select("*")->where("status", '=', 400)->run(true) ?? 0;
            $chan->push(['sold' => $sold]);
        });

        go(function () use ($chan) {
            $booked = House::select("*")->where("status", '=', 300)->run(true) ?? 0;
            $chan->push(['booked' => $booked]);
        });

        $results = [];
        for ($i = 0; $i < 3; $i++) {
            $results[] = $chan->pop();
        }

        $chan->close();

        $finalResults = [];
        foreach ($results as $result) {
            $finalResults = array_merge($finalResults, $result);
        }

        return $finalResults; // Mengembalikan hasil akhir
        //  });
    }
};
