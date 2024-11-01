<?php

namespace Kamela\Controller;

use Kamela\Models\House;
use Kamela\Models\Type;
use Oktaax\Http\Request;
use Oktaax\Http\Response;
use Oktaax\Http\ResponseJson;

class HouseController
{


   public function booking(Request $request, Response $response)
   {
      $request->validate([
         "name" => "required",
         "email" => "required|email",
         "nohp" => "required",
         "pekerjaan" => "required",
         "rumahid" => "required"
      ], $request->request->post);
      $request->end($request->requestErrors);
   }


   public function update(Request $req, Response $res)
   {

      $id =   $req->json("id");
      $blok =    $req->json("blok");
      $no =  $req->json("no");

      $r = House::update(["blok" => $blok, "no" => $no], ["id" => $id])->run(true);
      if ($r > 0) {
         $res->status(200)->json(new ResponseJson(['msg' => "ok"]));
      } else {
         $res->status(500)->json(new ResponseJson(['msg' => "notok"]));
      }
   }
   public function updateStatus(Request $req, Response $res)
   {

      $id =   $req->json("id");
      $status =    $req->json("status");

      $r = House::update(["status" => $status], ["id" => $id])->run(true);
      if ($r > 0) {
         $res->status(200)->json(new ResponseJson(['msg' => "ok"]));
      } else {
         $res->status(500)->json(new ResponseJson(['msg' => "notok"]));
      }
   }

   public function get(Request $req, Response $res)
   {

      if ($req->get['id'] ?? false) {
         $house =  House::find($req->get['id']);

         $res->json(new ResponseJson((array)$house));
      } else {
         $res->status(400)->json(new ResponseJson());
      }
   }
   public function gallery(Request $req, Response $res)
   {

      $types = Type::raw("SELECT 
                type.id, 
                ANY_VALUE(type.`3dmodel`) AS `3dmodel`,
                ANY_VALUE(type.`fullsphere`) AS `fullsphere`,
                ANY_VALUE(type.`price`) AS `price`,
                ANY_VALUE(type.`spec`) AS `spec`,
                IFNULL(CONCAT('[', GROUP_CONCAT(
                    CONCAT(
                        '{\"id\":', gallery.id, 
                        ',\"img\":\"', gallery.img, 
                        '\",\"name\":\"', gallery.name, '\"}'
                    )
                    ORDER BY gallery.id SEPARATOR ','
                ), ']'), '[]') AS images
            FROM type
            LEFT JOIN gallery ON gallery.typeid = type.id
            GROUP BY type.id")->get();
      $active = 4;
      $res->render("pages.gallery", compact("types", "active"));
   }

   public function getHouseTotalByType(Request $request, Response $response)
   {
      $type = $request->get['type'] ?? "type36";
      $all =  House::select("*")->where("type", "=", $type)->run(true);
      $sold = House::select("*")->where("type", "=", $type)->andWhere("status", "=", 400)->run(true);

      $response->json(new ResponseJson(["total" => $all, "sold" => $sold]));
   }
}
