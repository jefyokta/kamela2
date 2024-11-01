<?php


return [
    "app" => [
        "name" =>  "KamelaPermai",
        "locale" => "ID",
        "key" => OktaEnv("APPKEY")
    ],
    "db" => [
        "host" =>   OktaEnv("DBHOST"),
        "user" => OktaEnv("DBUSER"),
        "password" => OktaEnv("DBPASSWORD"),
        "name" => OktaEnv("DBNAME"),
        "port" => 3306,
        "connection" => "mysql"

    ]
];
