<?php

namespace Kamela\Middleware;

use Oktaax\Console;
use Oktaax\Http\Request;
use Oktaax\Http\Response;
use Oktaax\Http\ResponseJson;


class AssetProtection
{
    public static function asset(Request $request, Response $response, $next)
    {

        if ($request->get['f'] ?? false) {
            $file = $request->get['f'];
            if (str_contains($file, "/")) {
                $response->status(404)->end();
            } else {
                $next();
            }
        } else {
            $response->status(404)->end();
        }
    }

    public static function dot(Request $request, Response $response, $next)
    {
        if ($request->get['f'] ?? false) {
            $file = $request->get['f'];
            if (str_contains($file, "../")) {
                Console::log($request->get['f']);
                $response->status(404)->end();
            } else {
                $next();
            }
        } else {
            $response->status(404)->end();
        }
    }
}
