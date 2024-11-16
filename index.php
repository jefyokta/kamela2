<?php
require_once __DIR__ . "/app/init.php";

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Kamela\Controller\AdminController;
use Kamela\Controller\DownloaderController;
use Kamela\Controller\GuestController;
use Kamela\Controller\HomeController;
use Kamela\Controller\HouseController;
use Kamela\Controller\TypeController;
use Kamela\Middleware\AssetProtection;
use Kamela\Middleware\Auth;
use Kamela\Middleware\BodyParser;
use Kamela\Websocket\Notification;
use Oktaax\Console;
use Oktaax\Http\Middleware\Logger;
use Oktaax\Http\Request;
use Oktaax\Http\Response;
use Oktaax\Oktaax;
use Oktaax\Trait\HasWebsocket;
use Swoole\Coroutine\Http\Client;
use Swoole\Table;
use Swoole\WebSocket\Server;

/**
 * 
 * ------------
 * Server Init |
 * ------------
 * 
 */

$app = new  class extends Oktaax {
    use HasWebsocket;
};

$app->set("render_engine", 'blade');
$app->set("viewsDir", __DIR__ . "/resources/views");
$app->set("logDir", __DIR__ . "/storage/log/log");
$app->set("publicDir", __DIR__ . "/public");


$app->set("blade", ["cacheDir" => __DIR__ . "/storage/views", "functionsDir" => __DIR__."/app/config/config.php"]);

/**
 * 
 * -------------------
 * Routes             |
 * ------------------- 
 * 
 */
$app->use(Logger::handle());
$app->use(BodyParser::index());
/**
 * 
 * Resources Handler
 * 
 */

$app->get("/models/typ66.gltf", function (Request $req, Response $res) {

    $res->sendfile(storagePath("/models/typ66.gltf"));
});

$app->get("/models", function (Request $req, Response $res) {
    $file = file_exists(storagePath("/models/" . $req->get['f']));

    if ($file) {
        $res->sendfile(storagePath("/models/" . $req->get['f']));
    } else {
        $res->status(404)->end();
    }
}, [AssetProtection::class, 'asset']);
$app->get("/css/app", function (Request $req, Response $res) {
    $res->sendfile(__DIR__ . "/resources/css/app.css");
});


$app->get("/css/style", function (Request $req, Response $res) {
    $res->response->sendfile(__DIR__ . "/resources/css/style.css");
});

$app->get("/js/flowbite", function (Request $req, Response $res) {
    $res->sendfile(__DIR__ . "/node_modules/flowbite/dist/flowbite.min.js");
});
$app->get("/js/flowbite.min.js.map", function (Request $req, Response $res) {
    $res->sendfile(__DIR__ . "/node_modules/flowbite/dist/flowbite.min.js.map");
});
$app->get("/css/flowbite", function (Request $req, Response $res) {
    $res->sendfile(__DIR__ . "/node_modules/flowbite/dist/flowbite.min.css");
});

$app->get("/js", function (Request $req, Response $res) {
    $file = file_exists(__DIR__ . "/resources/js/" . $req->get['f']);

    if ($file) {
        $res->sendfile(resourcePath("js/" . $req->get['f']));
    } else {
        $res->status(404)->end();
    }
}, [AssetProtection::class, 'asset']);
$app->get("/js/app", function (Request $req, Response $res) {
    $res->sendfile(resourcePath("js/app.js"));
});

$app->get("/nodemod", function (Request $req, Response $res) {
    $res->sendfile(__DIR__ . "/node_modules/" . $req->get['f']);
}, [AssetProtection::class, 'dot']);

$app->get("/images/siteplan", function (Request $req, Response $res) {
    $file = file_exists(__DIR__ . "/storage/images/siteplan.png");;
    if (!$file) {
        $res->status(404)->end();
    } else {
        $res->sendfile(__DIR__ . "/storage/images/siteplan.png");
    }
});

$app->get("/img", function (Request $request, Response $response) {

    $image = $request->get["f"];
    $file = file_exists(__DIR__ . "/storage/images/" . $image);
    if ($file) {
        $response->sendfile(__DIR__ . "/storage/images/" . $image);
    } else {
        $response->status(404)->end();
    }
}, [AssetProtection::class, 'asset']);

$app->get("/download", [DownloaderController::class, 'index']);

/**
 * 
 * Auth Handler
 * 
 */


// $app->useFor("/login", 'Kamela\Middleware\Auth.guest');
$app->get("/login", [HomeController::class, 'login'], 'Kamela\Middleware\Auth.guest');
$app->post("/login", function (Request $req, Response $res, $token): void {
    $res->with("Selamat Datang Admin!")->status(302)->redirect("/admin");
}, 'Kamela\Middleware\Auth.guest', 'Kamela\Middleware\Auth.login');
$app->delete("/logout", function ($req, $res) {
    $res->response->redirect("/");
}, 'Kamela\Middleware\Auth.tokenVerify', 'Kamela\Middleware\Auth.logout');



/**
 * 
 * Public Pages Handler
 * 
 */

$app->get("/", [HomeController::class, 'index']);
$app->get("/guide", [HomeController::class, 'guide']);

$app->get('/siteplan', [HomeController::class, 'siteplan']);
$app->get("/house/booking", [GuestController::class, 'booking']);
$app->get("/contact", function ($req, $res) {

    $res->render('pages.contact',["active"=>0]);
});


$app->get("/gallery", [HouseController::class, 'gallery']);
$app->get("/pricing", [TypeController::class, 'index']);

$app->post("/house/booking", [GuestController::class, 'create']);



/**
 * 
 * Admin Pages Handler
 * 
 */

$app->get("/admin/dashboard", [AdminController::class, 'index'], [Auth::class, 'tokenVerify']);
$app->get("/admin", [AdminController::class, 'index'], [Auth::class, 'tokenVerify']);
$app->get("/admin/tamu", [AdminController::class, 'guest'], [Auth::class, 'tokenVerify']);
$app->get("/admin/rumah", [AdminController::class, 'house'], [Auth::class, 'tokenVerify']);

$app->put("/admin/house", [HouseController::class, 'update'], [Auth::class, 'tokenVerify']);
$app->put("/admin/guest", [GuestController::class, 'update'], [Auth::class, 'tokenVerify']);

$app->put("/admin/house/status", [HouseController::class, 'updateStatus'], [Auth::class, 'tokenVerify']);

$app->get("/admin/house", [HouseController::class, 'get'], [Auth::class, 'tokenVerify']);
$app->get("/admin/history", [GuestController::class, 'history'], [Auth::class, 'tokenVerify']);
$app->get("/admin/docs", [AdminController::class, 'document'], [Auth::class, "tokenVerify"], [AssetProtection::class, "asset"]);
$app->get("/admin/type/sale", [HouseController::class, 'getHouseTotalByType'], [Auth::class, 'tokenVerify']);
$app->get("/admin/type", [TypeController::class, "admin"], [Auth::class, 'tokenVerify']);
$app->put("/admin/type", [TypeController::class, "store"], [Auth::class, 'tokenVerify']);
$app->delete("/admin/type", [TypeController::class, "delete"], [Auth::class, 'tokenVerify']);

$app->get('/admin/house/guest', [GuestController::class, 'index'], [Auth::class, 'tokenVerify']);
$app->put('/admin/house/guest', [GuestController::class, 'sold'], [Auth::class, 'tokenVerify']);

/**
 * 
 * --------------
 * 
 * Websocket handler
 * -----------------
 */
$app->onOpen(function (Server $server, Request $request, Table &$table) {

    // $server->push($request->fd,json_encode(['message'=>"hallo dari server"]));
    try {
        $cookie = $request->cookie("X-KamelaSess") ?? "asda";

        $token = JWT::decode($cookie, new Key(config('app.key'), "HS512"));
        if ($token) {
            $isAdmin = 1;
        } else {
            $isAdmin = 0;
        }
    } catch (\Throwable $th) {
        $isAdmin = 0;
    }

    $table->set($request->fd, [
        "details" => json_encode(["isAdmin" => $isAdmin])
    ]);
});


$app->ws("/notification", [Notification::class, 'handle'])
    ->ws("/notification/house", [Notification::class, 'house']);



$app
    // ->withSSL(__DIR__ . "/cert/kamela-cert.pem", __DIR__ . "/cert/kamela-key.pem")
    ->listen(3000, "0.0.0.0", function ($url) {
        Console::log("Server Started on {$url}");
    });
