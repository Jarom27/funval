<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/students/{matricula}/{nivel}/{id}");
Route::get("/students/{matricula}/{nivel}");
Route::get("/students/{matricula}");
Route::get('/students',function(){
    return json_encode(["texto" =>"Hola"]);
});
