<?php

namespace Kamela\Controller;

use Kamela\Models\Gallery;
use Kamela\Models\Type;
use Oktaax\Http\Request;
use Oktaax\Http\Response;
use Swoole\Coroutine;
use Swoole\Coroutine\System;

class TypeController
{
   public function index(Request $req, Response $res)
   {

      $types = Type::select("*")->get();
      $active = 5;
      $res->render("pages.pricing", compact("active", "types"));
   }
   public function store(Request $req, Response $res)
   {
      $file = $req->request->files['file'];
      $typeid = $req->post("typeid");


      // Coroutine::create(function () use ($file, $typeid, $res, $req) {

      $uploadDir = storagePath("/images/");

      $destination = $uploadDir . uniqid() . "_" . basename($file['name']);
      $fileName = end(explode("/", $destination));




      $src = fopen($file['tmp_name'], 'rb');
      $dest = fopen($destination, 'wb');

      if ($src && $dest) {
         while (!feof($src)) {
            $chunk = fread($src, 8192);
            fwrite($dest, $chunk);
         }

         fclose($src);
         fclose($dest);

         Gallery::insert(["name" => $fileName, "typeid" => $typeid, "img" => $fileName])->run();
         $res->with("berhasill")->status(302)->redirect($req->header['referer'] ?? "/admin");
      }
      // });
   }


   public function admin(Request $req, Response $res)
   {
      $type36 = Gallery::select("*")->where("typeid", '=', 'type36')->get();
      $type45 = Gallery::select("*")->where("typeid", '=', 'type45')->get();
      $type66 = Gallery::select("*")->where("typeid", '=', 'type66')->get();




      $res->render("admin.pages.type", compact("type36", "type45", "type66"));
   }


   public function delete(Request $req, Response $res)
   {

      $id =     $req->post("imgid");
      if (!$id) {
         return $res->withError("Image id diperlukan")->status(302)->redirect($req->request->header['referer']);
      }
      $image = Gallery::find($id);
      if (!$image) {
         return $res->withError("Gambar tidak ditemukan")->status(302)->redirect($req->request->header['referer']);
      }
      $result =  Gallery::delete()->where("id", '=', $id)->run(true);
      $un = unlink(storagePath("/images/{$image->img}"));

      if ($result > 0 && $un) {
         return $res->with("berhasil menghapus gambar")->status(302)->redirect($req->header['referer']);
      } else {
         return $res->withError("gagal menghapus gambar, kesalahan sistem")->redirect($req->header['referer']);
      }
   }
}
