<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HelloWorld;

class HelloWorldController extends Controller
{
    public function tampil()
    {
        $message = 'Hello World';
        return ApiFormatter::createApi(200, $message);
    }

    public function tampilDataHelloWorld()
    {
        $data = HelloWorld::paginate(5);

        return ApiFormatter::createApi(200, $data);
    }

    public function tambahDataHelloWorld(Request $request)
    {
        $data = $request->validate([
            'content' => 'required',
        ]);

        $HelloWorld = HelloWorld::create($data);

        if ($HelloWorld !== null) {
            return ApiFormatter::createApi(200, 'data berhasil diinput');
        } else {
            return ApiFormatter::createApi(400, 'data tidak terinput');
        }
    }
}
