<?php

namespace Kamela\Controller;

use Oktaax\Http\Request;
use Oktaax\Http\Response;
use Swoole\Coroutine;

class DownloaderController
{
   public function index(Request $req, Response $res)
   {
      if ($req->request->get["f"] ?? false) {
         $fileName = $req->request->get["f"];
         $file = file_exists(storagePath("docs/" . $fileName));
         if (!$file) {
            $res->status(404)->end("requested file's not found");
         } else {
            $res->sendfile(storagePath("docs/" . $fileName));
         }
      } else {
         $res->status(400)->end('file name is required');
      }
   }
}
