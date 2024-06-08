<?php

namespace App\Helper;

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTHelper
{
    public static function createToken($userEmail, $userId)
    {
        $key = '123-abc-xyz';
        $payload = [
            'iss' => 'code-arif', //k isseu korbe
            'iat' => time(), //kokhon create kora hocche
            'exp' => time() + 60 * 60, //kokhon token ta expired hoya jabe
            'userEmail' => $userEmail,
            'userId' => $userId,
        ];
        return JWT::encode($payload, $key, 'HS256'); //here HS256 is a algorithm
    }

    public static function decodeToken($token)
    {
        try {
            if ($token == null) {
                return 'unauthorized';
            } else {
                $key = '123-abc-xyz';
                return JWT::decode($token, new Key($key, 'HS256')); //here HS256 is a algorithm
            }
        } catch (Exception $exception) {
            return 'unauthorized';
        }
    }
}
