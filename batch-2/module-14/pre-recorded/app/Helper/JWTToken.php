<?php

namespace App\Helper;
use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTToken
{
    //login token
    public static function CreateToken($userEmail): string
    {
        $key = (string) env('JWT_TOKEN');
        $payload = [
            'iss' => 'codearif',
            'iat' => time(),
            'exp' => time() + 60 * 60,
            'userEmail' => $userEmail,
        ];

        return JWT::encode($payload, $key, 'HS256');
    }

    //reset password
    public static function PassResetToken($userEmail): string
    {
        $key = (string) env('JWT_TOKEN');
        $payload = [
            'iss' => 'codearif',
            'iat' => time(),
            'exp' => time() + 60 * 20,
            'userEmail' => $userEmail,
        ];

        return JWT::encode($payload, $key, 'HS256');
    }

    public static function VerifyToken($token): string
    {
        try {
            $key = (string) env('JWT_TOKEN');
            $decode = JWT::decode($token, new Key($key, 'HS256'));
            return $decode->userEmail;
        } catch (Exception $e) {
            return 'Unauthorized';
        }
    }
}
