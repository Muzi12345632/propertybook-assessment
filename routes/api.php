<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\pricing;
use App\Http\Controllers\services;
use App\Http\Controllers\user;
use App\Http\Controllers\Controller;

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

//Route::post("login", [AuthController::class, "login"]);
//Route::get("/services/index", [services::class, "index"]);
//Route::get("/pricing/index", [pricing::class, "index"]);


Route::group([
    "middleware" => ["auth:api"]
], function(){

    Route::post("store", [pricing::class, "store"]);
    Route::post("store", [services::class, "store"]); 
    Route::get("index", [user::class, "store"]); 

});


//TODO set secret for jwt.
