<?php

namespace Kamela\Services;

use Kamela\Models\User;

class AuthService
{
    public static function compare(string $username, string $password): object|false
    {
        $user =  User::find($username);

        if (!$user) {
            return false;
        }
        if (password_verify($password,$user->password)) {
            return $user;
        } else {

            return false;
        }
    }
};
