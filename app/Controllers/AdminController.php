<?php

namespace Kamela\Controller;

use Kamela\Models\Guest;
use Kamela\Models\House;
use Oktaax\Console;
use Oktaax\Http\Request;
use Oktaax\Http\Response;
use Swoole\Coroutine;
use Swoole\Coroutine\Channel;

class AdminController
{
   public function index(Request $req, Response $res)
   {
      $monthly = $this->monthly();
      $type36 = (object) $this->soldAndUnsold("type36");
      $type45 = (object) $this->soldAndUnsold("type45");
      $type66 = (object) $this->soldAndUnsold("type66");
      $allhouses = (object) $this->soldAndUnsold();
      $method = $this->mothlymethod();

      $lastMonth = Guest::raw(
         "SELECT * FROM tamu 
          WHERE MONTH(created_at) = MONTH(CURDATE() - INTERVAL 1 MONTH) 
          AND YEAR(created_at) = YEAR(CURDATE() - INTERVAL 1 MONTH);"
      )->run(true) ?? 0;

      $increment = $this->increment($monthly, $lastMonth);

      $request = $req;

      $res->render("admin.pages.index", compact("request", "monthly", "type36", "type45", "type66", "allhouses", "method", "increment"));
   }

   public function guest(Request $req, Response $res)
   {
      $guest = Guest::select("*");

      if ($req->get['filter'] == null) {
         $guest = $guest;
      } else {
         if ($req->get['filter'] ?? false) {
            $data['guest'] = $guest->where("status", '=', $req->get['filter']);
            $data['checked'] = $req->get['filter'];
         } elseif (!$req->get['filter'] ?? false && $req->queryHas('q')) {
            $guest->where("name", "LIKE", $req->get['q']);
            $req->get['filter'] ?? null;
         } elseif ($req->get['filter'] ?? false && $req->queryHas('q')) {
            $data['guest'] = $guest->where("status", '=', $req->get['filter'])->andWhere("", "LIKE", $req->get['q']);
            $data['checked'] = $req->get['filter'];
         } else {
            $data['checked'] = $req->get['filter'] ?? null;
            $guest = $guest;
         }
      }

      $data['guest'] = $guest->get();
      $request = $req;
      $res->render("admin.pages.guest", compact("data", "request"));
   }

   public function house(Request $req, Response $res)
   {
      $request = $req;
      $get = $req->get;
      $houses = House::select("rumah.* , (type.price + rumah.kelebihan * type.kelebihanfee + 
        CASE WHEN rumah.kelebihan != 0 THEN 1000000 ELSE 0 END) AS price")->join("type", "type.id = rumah.type");
      if (empty($get['search'])) {
         if (!empty($get['type']) && empty($get['filter'])) {
            $houses = $houses->where('type', '=', $get['type']);
         } elseif (empty($get['type']) && !empty($get['filter'])) {
            $houses =  $houses->where('status', '=', $get['filter']);
         } elseif (!empty($get['type']) && !empty($get['filter'])) {
            $houses = $houses->where("type", '=', $get['type'])->andWhere("status", "=", $get['filter']);
         } else {
            $houses = $houses;
         }
      } else {
         $houses = $houses->where("blok", "LIKE", "%" . $get['search'] . "%");
      }
      $houses = $houses->get();

      $search = $get['search'] ?? "";
      $res->render("admin.pages.house", compact("houses", "request", "search"));
   }

   public function document(Request $request, Response $response)
   {


      $doc = $request->get['f'];

      if (!file_exists(storagePath("/private/docs/$doc"))) {
         return $response->status(404)->end("Document $doc  not found!");
      } else {
         $response->sendfile(storagePath("/private/docs/$doc"));
      }
   }
   private function monthly()
   {
      return floor((Guest::raw("SELECT * FROM tamu WHERE MONTH(created_at) = MONTH(CURDATE()) AND YEAR(created_at) = YEAR(CURDATE());")->run(true) ?? 0) * 100) / 100;
   }

   private function mothlymethod()
   {
      return floor((Guest::raw("SELECT * FROM tamu WHERE metode = 1 AND MONTH(created_at) = MONTH(CURDATE()) AND YEAR(created_at) = YEAR(CURDATE());")->run(true) ?? 0)*100)/100;
   }

   private function soldAndUnsold($type = null): array
   {

      if (is_null($type)) {
         $unsold =  House::select("*")->where("status", '!=', 400)->run(true) ?? 0;
         $sold =  House::select("*")->where("status", '=', 400)->run(true) ?? 0;
         $booked =  House::select("*")->where("status", '=', 300)->run(true) ?? 0;
         return ["sold" => $sold, "unsold" => $unsold, "booked" => $booked];
      } else {

         $unsold =  House::select("*")->where("type", '=', $type)->andWhere("status", '!=', 400)->run(true) ?? 0;
         $sold =  House::select("*")->where("type", '=', $type)->andWhere("status", '=', 400)->run(true) ?? 0;
         $booked =  House::select("*")->where("type", '=', $type)->andWhere("status", '=', 300)->run(true) ?? 0;

         return ["sold" => $sold, "unsold" => $unsold, "booked" => $booked];
      }
   }

   private function increment($cur, $lastMonth)
   {
      Console::log("Current: " . $cur . " (type: " . gettype($cur) . ")");
      Console::log("Last Month: " . $lastMonth . " (type: " . gettype($lastMonth) . ")");
      try {
         if ($cur === 0) {
            Console::log("Current is zero, returning -100%");
            return -100;
         } else if (empty($lastMonth) || !is_numeric($lastMonth) || $lastMonth == 0) {
            return 0;
         } elseif ($cur !== 0 && $lastMonth !== 0) {
            $result = (($cur - $lastMonth) / $lastMonth) * 100;
            return floor($result * 100) / 100;
         } else {
            return 0;
         }
      } catch (\Throwable $th) {
         //throw $th;
         Console::log($th->getMessage() . " " . $th->getLine());
      }
   }
}
