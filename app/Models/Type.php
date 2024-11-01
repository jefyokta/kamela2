<?php

namespace Kamela\Models;

use oktaa\Database\Database;

class Type extends Database
{

    protected string $table = 'type';

    protected array $definition = [
        "id" => "INT PRIMARY KEY",
        "3dmodel" => "VARCHAR(255)",
        "fullsphere" => "VARCHAR(255)",
        "price" => "BIGINT",
        "bookingfee" => "BIGINT",
        "5thn" => "BIGINT NULL",
        "10thn" => "BIGINT NULL",
        "15thn" => "BIGINT NULL",
        "20thn" => "BIGINT NULL",
        "kelebihanfee" => "BIGINT NULL",
        "dp" => "BIGINT NULL",
        "spec" => "LONGTEXT"
    ];
};
