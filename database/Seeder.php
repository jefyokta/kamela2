<?php

namespace oktaa\Database;

use Kamela\Models\House;
use Kamela\Models\Type;
use Kamela\Models\User;
use Swoole\Coroutine;

class Seeder
{


    public function run()
    {

        Coroutine::run(function () {
            go(function () {

                House::create(json_decode(file_get_contents(storagePath("houses.json")), true));
            });

            go(function () {
                User::create([
                    ['username' => "jefyokta", "role" => "Software Engineer", "password" => password_hash("jepiokta", PASSWORD_DEFAULT)],
                    ["username" => "liza", "role" => "Marketing", "password" => password_hash("liza124", PASSWORD_DEFAULT)]
                ]);
            });
            go(function () {
                Type::raw("INSERT INTO `type` (`id`, `3dmodel`, `fullsphere`, `price`, `spec`, `bookingfee`, `5thn`, `10thn`, `15thn`, `20thn`, `kelebihanfee`, `dp`) VALUES
                ('type36', 'hitam36.glb', 'type36.jpg', 162000000, '{\"Luas\": 114, \"atap\": \"Genteng Metal\", \"kamar\": 2, \"lantai\": \"keramik\", \"dinding\": \"Batu Bata Plaster & Cat\", \"pondasi\": \"Telap dan Sloof Beton Bertulang\", \"kamarmandi\": 1}', 2000000, NULL, 1660889, 1235595, 1029104, 300000, 8100000),
                ('type45', 'm.glb', 'type45.jpg', 300000000, '{\"Luas\": 114, \"atap\": \"Genteng Metal\", \"kamar\": 2, \"lantai\": \"keramik\", \"dinding\": \"Batu Bata Plaster & Cat\", \"pondasi\": \"Telap dan Sloof Beton Bertulang\", \"kamarmandi\": 2}', 3000000, 4895040, 2943600, 2328240, NULL, 400000, 60000000),
                ('type66', 'type66.gltf', 'type66.jpg', 450000000, '{\"Luas\": 198, \"atap\": \"Genteng Metal\", \"kamar\": 2, \"lantai\": \"keramik\", \"dinding\": \"Batu Bata Plaster & Cat\", \"pondasi\": \"Telap dan Sloof Beton Bertulang\", \"kamarmandi\": 2}', 5000000, 7342651, 4415495, 3492505, NULL, 400000, 90000000);
                COMMIT")->run();
            });
        });
    }
}
