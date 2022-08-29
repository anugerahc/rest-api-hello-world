<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HelloWorld;
use Exception;
use Illuminate\Support\Facades\DB;

class HelloWorldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tampil()
    {
        $message = 'Hello World';
        return ApiFormatter::createApi(200, $message);
    }

    public function tampilDataHelloWorld()
    {

        //trying pagination
        $data = DB::table('hello_world_time_stamp')->paginate(5);

        return ApiFormatter::createApi(200, $data);

        /* 
        ###
        Old Showing Data from Database
        ###
        
        $data = HelloWorld::all();
        if ($data) {
            return ApiFormatter::createApi(200, 'success', $data);
        } else {
            return ApiFormatter::createApi(400, 'error', 'data tidak ada');
        }
        */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tambahDataHelloWorld(Request $request)
    {
        try {
            $data = $request->validate([
                'content' => 'required',
            ]);

            $HelloWorld = HelloWorld::create($data);

            if ($HelloWorld !== null) {
                return ApiFormatter::createApi(200, 'data berhasil diinput');
            } else {
                return ApiFormatter::createApi(400, 'data tidak terinput');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'data tidak benar');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
