<?php

namespace App\Helpers;

class ApiFormatter
{
    protected static $response = [

        'code' => null,
        'status' => null,
        'content' => [
            'data' => null
        ],
    ];

    public static function createApi($code = null, $message = null)
    {
        if ($code == 200) {
            self::$response['code'] = $code;
            self::$response['status'] = 'success';
            self::$response['content']['data'] = $message;
        } else {
            self::$response['code'] = $code;
            self::$response['status'] = 'error';
            self::$response['content']['data'] = $message;
        }

        return response()->json(self::$response, self::$response['code']);
    }
}
