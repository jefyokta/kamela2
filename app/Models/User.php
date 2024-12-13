<?php

namespace Kamela\Models;

use oktaa\Database\Database;

class User extends Database
{
    protected string $table = 'user';
    protected string $findableColumn = 'username';
    protected array $definition = [
        "id" => "INT AUTO_INCREMENT PRIMARY KEY",
        "username" => "VARCHAR(255)",
        "password" => "VARCHAR(255)",
        "token" => "LONGTEXT DEFAULT NULL",
        "role" => "VARCHAR(255)",
 
    ];
}
