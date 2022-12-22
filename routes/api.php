<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CodeControler;
use App\Http\Controllers\OfferController;
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

//Get all coders
Route::get("/codes", [CodeControler::class, 'getAllCodes']);
//Generate a code
Route::post("/code/new", [CodeControler::class, "generateCode"]);
//Set Code to User
Route::put("/code/set", [CodeControler::class], "setCodeToOffer ");

//Get all offers
Route::get("/offers", [OfferController::class, "getAllOffers"]);
