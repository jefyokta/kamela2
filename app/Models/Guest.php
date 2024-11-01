<?php

namespace Kamela\Models;

use oktaa\Database\Database;

class Guest extends Database
{

    protected string $table = 'tamu';
    protected $searchable = ["name"];
    protected array $definition = [
        "id" => "INT AUTO_INCREMENT PRIMARY KEY",
        "name" => "VARCHAR(255)",
        "phone_number" => "VARCHAR(15)",
        "rumahid" => "INT NOT NULL",
        "email" => "VARCHAR(255)",
        "pekerjaan" => "VARCHAR(255)",
        "metode" => "TINYINT",
        "document" => "VARCHAR(100)",
        "status" => "INT",
        "created_at" => "DATETIME DEFAULT CURRENT_TIMESTAMP"
    ];
    


    public function getByStatus() {}

    public function searchMixed() {}
}
