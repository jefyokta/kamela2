<?php

namespace Kamela\Middleware;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Kamela\Models\User;
use Kamela\Services\AuthService;
use Oktaax\Console;
use Oktaax\Http\Request;
use Oktaax\Http\Response;
use Oktaax\Http\ResponseJson;

class Auth
{
    private const TOKEN_EXPIRY = 3600 * 24;

    /**
     * Login Method: Authenticates user and returns JWT token.
     */
    public static function login(Request $req, Response $res, callable $next)
    {
        $username = $req->post('username') ?? false;
        $password = $req->post('password') ?? false;

        if (!$username || !$password) {
            // $res->status(400)->json(new ResponseJson([], 'Username and password are required.'));
            return    $res->withError("Username atau password diperlukan")->status(302)->back();
        }

        $credential = AuthService::compare($username, $password);
        if (!$credential) {
            return $res->withError("Username atau password salah")->status(302)->back();
        }

        $payload = [
            'username' => $credential->username,
            'role'     => $credential->role,
            'iat'      => time(),
            'exp'      => time() + self::TOKEN_EXPIRY,
        ];

        try {
            $token = JWT::encode($payload, config('app.key'), 'HS512');
            User::update(['token' => $token], ['username' => $credential->username])->run();

            $res->cookie('X-KamelaSess', $token, time() + self::TOKEN_EXPIRY, '/', '', false, true, '');
            $next(['token' => $token]);
        } catch (\Throwable $th) {
            Console::log($th->getMessage() . $th->getLine());
            return $res->withError("Kesalahan sistem coba lagi nanti")->status(302)->back();
        }
    }

    /**
     * Logout Method: Invalidates the user's token and clears cookies.
     */
    public static function logout(Request $req, Response $res, callable $next, $user)
    {
        $affected = User::update(['token' => null], ['username' => $user->username])->run(true);

        if ($affected < 1) {
            $res->status(500)->end();
        }

        $res->cookie(name: 'X-KamelaSess', value: '', expires: time() - 3600, path: '/', secure: false, httponly: true, samesite: "Lax");
        $next();
    }

    /**
     * Token Verification: Checks if the user token is valid and still active.
     */
    public static function tokenVerify(Request $req, Response $res, callable $next)
    {
        $token = $req->request->cookie['X-KamelaSess'];

        if ($token) {
            try {
                $decoded = JWT::decode($token, new Key(config('app.key'), 'HS512'));
                $user = User::find($decoded->username);

                if (!$user || $user->token !== $token) {
                    $res->response->redirect('/login');
                } else {
                    $req->username = $decoded->username;
                    $req->role = $decoded->role;
                }
            } catch (\Throwable $th) {
                Console::error($th->getMessage() . $th->getLine() . " in" . $th->getFile());
                $res->response->redirect('/login');
            }
            $next($decoded);
        } else {
            $res->response->redirect('/login');
            Console::error("ngentot");
        }
    }

    /**
     * Guest Access: Allows access to certain areas without authentication.
     */
    public static function guest(Request $req, Response $res, callable $next)
    {
        $token = $req->request->cookie['X-KamelaSess'] ?? null;

        if ($token ?? false) {
            try {
                $decoded = JWT::decode($token, new Key(config('app.key'), 'HS512'));
                $user = User::select('*')
                    ->where('username', '=', $decoded->username)
                    ->andWhere('token', '=', $token)
                    ->first();

                if ($user) {
                    $req->username = $decoded->username;
                    $req->role = $decoded->role;
                    return $res->response->redirect('/admin', 302);
                }
            } catch (\Throwable $th) {
                $next($decoded);
            }
        }

        $next();
    }
}
