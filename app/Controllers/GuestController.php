<?php

namespace Kamela\Controller;

use Kamela\Models\Guest;
use Kamela\Models\House;
use Oktaax\Console;
use Oktaax\Http\Request;
use Oktaax\Http\Response;
use Oktaax\Http\ResponseJson;
use RuntimeException;
use Swoole\Coroutine;
use Swoole\Coroutine\Http\Client;

class GuestController
{
   public function index(Request $req, Response $res)
   {
      if ($req->get['h'] ?? false) {

         $guests =  Guest::select("*")->where("rumahid", '=', $req->get['h'])->get();
         return $res->json(new ResponseJson($guests));
      } else {
         $res->status(404)->end();
      }
   }

   public function sold(Request $req, Response $res)
   {

      $houseid = $req->json("houseid");
      $guestid = $req->json("guestid") ?? null;

      $guest = Guest::find($guestid) ?? null;
      // var_dump($guest);


      if ($guest && $guest->status !== 400) {
         Guest::update(["status" => 2], ['id' => $guest->id])->run();
      }
      $r = House::update(["status" => 400, "belongTo" => $guestid], ["id" => $houseid])->run(true);
      if ($r > 0) {
         return  $res->status(200)->json(new ResponseJson(["msg" => "ok"]));
      } else {
         return $res->status(500)->json(new ResponseJson([], "oops, server isnt working :(", "internal server error"));
      }
   }

   public function update(Request $req, Response $res)
   {
      $id = $req->json("id");
      $status = $req->json("status");

      if (Guest::update(["status" => $status], ["id" => $id])->run(true) > 0) {
         $res->status(200)->json(new ResponseJson(["msg" => "ok"]));
      } else {
         $res->status(500)->json(new ResponseJson([], "internal server error"));
      }
   }

   public function booking(Request $req, Response $res)
   {

      if ($req->get['h'] ?? false) {
         $house = House::select("rumah.*, type.id AS type_id,type.bookingfee")->join("type", "rumah.type = type.id")->where("rumah.id", '=', $req->request->get['h'])->first();
         if (!$house) {
            $res->status(404)->end();
         } else {
            $active = 0;

            $res->render("pages.booking", compact("house", "req", "active"));
         }
      } else {
         $res->status("404")->end("not found");
      }
   }
   public function create(Request $req, Response $res)
   {
      $name = $req->post("name");
      $phonenumber = $req->post("nohp");
      $email = $req->post("email");
      $job = $req->post("pekerjaan");
      $houseid = $req->body("rumahid");
      $file = $req->files['document'] ?? null;



      $method = $req->post("metode") ?? 0;

      $house = House::find($houseid);

      if (!$house || $house->status !== 200) {

         return  $res->withError("Rumah sudah terjual/sedang dipesan!")->status(302)->redirect("/siteplan");
      }

      if (str_starts_with($phonenumber, "0")) {
         $phonenumber = "62" . substr($phonenumber, 1);
      }

      if ($file) {
         Coroutine::create(function () use ($file, $res, $name, $phonenumber, $email, $job, $houseid, $method, $req) {
            $uploadDir = storagePath("private/docs/");

            if (!is_dir($uploadDir)) {
               mkdir($uploadDir, 0777, true);
            }
            $allowedFiles = ["docx", "pdf"];
            $destination = $uploadDir . uniqid() . "_" . basename($file['name']);
            $fileParts = explode("/", $destination);
            $fileName = end($fileParts);

            $fileExtParts = explode('.', $fileName);
            $fileExt = end($fileExtParts) ?? "";

            if (!in_array($fileExt, $allowedFiles)) {
               return $res->withError("File harus berformat docx atau pdf")->status(302)->back();
            } else {
               $src = Coroutine::readFile($file['tmp_name']);
               if ($src) {
                  $result = Coroutine::writeFile($destination, $src);
                  if ($result === false) {
                     throw new RuntimeException("Gagal menyimpan file.");
                  }




                  Console::info("File uploaded: {$file['name']}");

                  $result =    Guest::insert([
                     "name" => $name,
                     "phone_number" => $phonenumber,
                     "email" => $email,
                     "pekerjaan" => $job,
                     "document" => $fileName,
                     "rumahid" => $houseid,
                     "metode" => $method === 1 ? 1 : 0
                  ])->run(true);
                  if ($result > 0) {
                     go(function () use ($res) {
                        $res->with("Berhasil Memesan")->status(302)->back();
                     });
                     go(function () use ($houseid, $name) {
                        $client = new Client(config('app.host'), config('app.port'),true);

                        if ($client->upgrade("/notification")) {
                           $message = json_encode([
                              'event' => 'booking',
                              'message' => 'Ada tamu baru yang membooking rumah!',
                              "houseId" => $houseid,
                              "guestName" => $name,
                           ]);
                           $client->push($message);
                        } else {
                           echo "Upgrade ke WebSocket gagal.";
                        }
                     });
                  }
               } else {
                  $res->withError("Gagal Membuka file ")->status(302)->back();
               }
            }
         });
      } else {
         $res->withError("File Tidak ada")->status(302)->back();
      }
   }

   public function history(Request $req, Response $res)
   {
      $guests = House::select("*")->join("tamu", "rumah.belongTo = tamu.id")->get();
      $res->render("admin.pages.history", compact("guests"));
   }
}
