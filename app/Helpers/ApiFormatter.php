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

    protected static $failRespone = [
        'code' => null,
        'status' => null,
        'message' => null
    ];

    public static function createApi($code = null, $message = null)
    {
        if ($code == 200) {
            self::$response['code'] = $code;
            self::$response['status'] = 'success';
            self::$response['content']['data'] = $message;
            return response()->json(self::$response, self::$response['code']);
        } else {
            self::$failRespone['code'] = $code;
            self::$failRespone['status'] = 'error';
            self::$failRespone['message'] = $message;
            return response()->json(self::$failRespone, self::$failRespone['code']);
        }
    }
}
