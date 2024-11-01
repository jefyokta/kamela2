<?php

namespace Kamela\Controller;

use Kamela\Models\House;
use Kamela\Models\Type;
use Oktaax\Console;
use Oktaax\Http\Request;
use Oktaax\Http\Response;

class HomeController
{
    public function index(Request $request, Response $response)
    {
        $active = 0;
        $types = Type::raw("SELECT type.*, 
       COUNT(rumah.id) AS sisa 
FROM type
LEFT JOIN rumah ON type.id = rumah.type AND rumah.status < 400
WHERE type.3dmodel IS NOT NULL
GROUP BY type.id
ORDER BY type.id DESC;
")->get();
        $response->render("pages.index", compact("active", "types"));
    }
    public function siteplan(Request $req, Response $res)
    {
        $active = 1;

        $query =  House::select("rumah.*, (type.price + rumah.kelebihan * type.kelebihanfee + 
           CASE WHEN rumah.kelebihan != 0 THEN 1000000 ELSE 0 END) AS price")->join("type", 'rumah.type = type.id');

        $filter = false;
        if ($req->queryHas("type")) {

            switch ($req->get['type']) {
                case '45':
                    $query = $query->where("type.id", "=", "type45");
                    $filter = "type45";

                    break;
                case '36':
                    $query = $query->where("type.id", "=", "type36");
                    $filter = "type36";

                    break;
                case '66':
                    $query = $query->where("type.id", "=", "type66");
                    $filter = "type66";

                    break;

                default:
                    $query = $query;
                    $filter = false;

                    break;
            }
        }
        $houses = $query->get();


        $res->render("pages.siteplan", compact("houses", "filter", "active"));
    }

    public function guide(Request $request, Response $response)
    {
        $active = 3;

        $response->render("pages.guide", compact("active"));
    }

    public function login(Request $request, Response $response)
    {
        $active = 0;

        $response->render("pages.login", compact("active"));
    }
}
