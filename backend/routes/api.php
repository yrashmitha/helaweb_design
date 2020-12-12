<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




Route::apiResource("projects","API\ProjectAPIController");

Route::post("projects/{id}","home@API\ProjectAPIController");

Route::post("contact",function (Request $request){

//    return $request->all();
    $data=[
        "email"=>$request->input("email")
    ];
//    return $data["email"];

   Mail::to("email@email.com")->send(new \App\Mail\ContactMail($request->all()));


    if( count(Mail::failures()) > 0 ) {

        return response()->json(0);

    } else {
        return response()->json(1);
    }

});
