<?php


return [
    "app" => [
        "name" =>  "KamelaPermai",
        "locale" => "ID",
        "key" => OktaEnv("APP_KEY"),
        "host" => OktaEnv("APP_HOST") ?? "kamela-permai.oktaa",
        "port" => OktaEnv("APP_PORT") ?? 8000,

    ],
    "db" => [
        "host" =>   OktaEnv("DB_HOST"),
        "user" => OktaEnv("DB_USER"),
        "password" => OktaEnv("DB_PASSWORD"),
        "name" => OktaEnv("DB_NAME"),
        "port" => 3306,
        "connection" => "mysql"

    ]
];
