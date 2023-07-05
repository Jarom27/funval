<?php

use App\Http\Controllers\StudentController;
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

Route::post("/students/service/add", [StudentController::class,"add_Service_Hour"]);
Route::get("/students/{matricula}/{nivel}/{id}" ,  [StudentController::class, "ShowByMatricula_level_id"]);
Route::get("/students/{matricula}/{nivel}" ,  [StudentController::class, "ShowByMatricula_level"]);
Route::get("/students/{matricula}" ,  [StudentController::class, "ShowByMatricula" ]);
Route::get('/students', [StudentController::class, "ShowStudent"]);
