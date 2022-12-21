<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllUsers()
    {
        try {
            $user = User::table('name', 'email', 'codes')->get();
            response()->$user;
        } catch (\Throwable $th) {
            response()->json([
                "success"  => false,
                "message" => "Something went wrong on getting all Users"
            ]);
        }
    }
}
