<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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

//getAllUsers
Route::get("/users", [UserController::class, "getAllUsers"]);
//Login
Route::post("/user/login", [AuthController::class, "login"]);
//Register
Route::post("/user/register", [AuthController::class, "register"]);
//Logout
Route::post("/user/logout", [AuthController::class, "logout"]);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
