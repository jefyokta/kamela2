<?php 
namespace Kamela\Models;

use oktaa\Database\Database;

class House extends Database{

    protected string $table = 'rumah';
    protected array $definition = [
        "id" => "INT AUTO_INCREMENT PRIMARY KEY",
        "location" => "LONGTEXT",
        "type" => "VARCHAR(255)",
        "status" => "INT DEFAULT NULL",
        "blok" => "VARCHAR(15)",
        "kelebihan" => "INT DEFAULT 0",
        "no" => "INT",
        "belongTo" => "INT DEFAULT NULL",
        "status" => "INT",
        "created_at" => "DATETIME DEFAULT CURRENT_TIMESTAMP"
    ];
}


