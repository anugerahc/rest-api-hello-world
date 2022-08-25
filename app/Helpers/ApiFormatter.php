<?php

namespace App\Helpers;

class ApiFormatter
{
    protected static $response = [

        'status' => null,
        'message' => null,
        'content' => [
            'data' => null
        ],
    ];

    public static function createApi($code = null, $message = null, $data = null)
    {
        self::$response['status'] = $code;
        self::$response['message'] = $message;
        self::$response['content']['data'] = $data;

        return response()->json(self::$response, self::$response['status']);
    }
}
