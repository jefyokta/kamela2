<?php

namespace Kamela\Models;
use oktaa\Database\Database;

class Gallery extends Database
{
    protected string $table = 'gallery';

    protected array $definition = [
        "id" => "INT AUTO_INCREMENT PRIMARY KEY",
        "typeid" => "VARCHAR(255) NOT NULL",
        "img" => "VARCHAR(255) NOT NULL",
        "name" => "VARCHAR(255) NOT NULL",
    ];
}
