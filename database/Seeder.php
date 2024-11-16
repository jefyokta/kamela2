<?php

namespace oktaa\Database;

use Kamela\Models\House;
use Swoole\Coroutine;

class Seeder
{


    public function run()
    {

        Coroutine::run(function(){
            House::create(json_decode(file_get_contents(storagePath("houses.json")), true));
        });

    }
}
