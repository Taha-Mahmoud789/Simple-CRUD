<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*use app\Http\Controllers\PostController;*/

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

//Route::get("/",function (){
//    return 'API';
//});


Route::apiResource('posts',PostController::class);

