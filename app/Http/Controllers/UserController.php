<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getAllUsers()
    {
        try {
            $user = DB::table('users')->get();
            return response()->json([
                "success" => true,
                "data" => $user
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "success"  => false,
                "message" => "Something went wrong on getting all Users"
            ]);
        }
    }
}
