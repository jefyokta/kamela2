<?php

use Oktaax\Http\Request;

require_once __DIR__ . "/env.php";

function OktaEnv($key)
{

    return $_ENV[$key];
}
function config(string $key)
{
    $config =  require __DIR__ . "/app.php";
    $keys = explode(".", $key);
    if (!$keys) {
        return false;
    }

    return $config[$keys[0]][$keys[1]];
}
function IDRformat(int $number): string
{
    return number_format($number, 0, ',', '.');
}

function storagePath(string $path): string
{
    return __DIR__ . "/../../storage/$path";
}

function resourcePath(string $path): string
{
    return __DIR__ . "/../../resources/$path";
}

function url($url)
{

    return $url;
}


function vite($path) {
    $manifestPath = __DIR__ . '/../../public/build/.vite/manifest.json';
    if (!file_exists($manifestPath)) {
        throw new Exception('Vite manifest not found.');
    }

    $manifest = json_decode(file_get_contents($manifestPath), true);
    return "/build/".$manifest[$path]['file'] ?? null;
}
