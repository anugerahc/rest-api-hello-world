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

    public static function createApi($code = null, $status = null, $data = null)
    {
        self::$response['code'] = $code;
        self::$response['status'] = $status;
        self::$response['content']['data'] = $data;

        return response()->json(self::$response, self::$response['code']);
    }
}
