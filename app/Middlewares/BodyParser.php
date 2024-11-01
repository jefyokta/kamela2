<?php

namespace Kamela\Middleware;

use Oktaax\Http\Request;
use Oktaax\Http\Response;
use Oktaax\Http\ResponseJson;

class BodyParser
{



    public static function index()
    {
        return function (Request $req, Response $res, callable $next) {
            $rawBody = $req->request->rawContent();
            $data = json_decode($rawBody, true);

       

            $req->body = $data;
            $req->username = "jefyokta";
         
            $next();
        };
    }
}
