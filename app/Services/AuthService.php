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
        if ($user->password === $password) {
            return $user;
        } else {

            return false;
        }
    }

};