<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{

    //Register
    public function register(Request $request)
    {
        try {

            $user = User::create([
                'name' => $request->get('name'),
                'surname' => $request->get('surname'),
                'email' => $request->get('email'),
                'codes' => $request->get('codes'),
                'password' => bcrypt($request->password)
            ]);

            return response()->json([
                "success" => true,
                "message" => "Successfull registration",
                "user" => $user,
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                "success" => false,
                "message" => "Something went wrong on Registration",
                "error" => $th
            ], 500);
        }
    }

    //Login

    public function login(request $request)
    {
        try {
            $input = $request->only('email', 'password');
            if (Auth::attempt($input)) {
                return response()->json([
                    'success' => true,
                    "message" => "logged in successfully",
                    "data" => $input
                ]);
            }
            if (!Auth::attempt($input)) {
                return response()->json([
                    "success" => false,
                    "message" => "incorrect credentials"

                ]);
            }
        } catch (\Throwable $th) {
            response()->json([
                "success" => false,
                "message" => "Something went wrong on Loggin in",
                "error" => $th
            ], 500);
        }
    }

    //Logout

    public function logout()
    {
        try {
            Auth::logout();
            // auth()->logout();
            return response()->json([
                'success' => true,
                'message' => 'User logged out successfully'

            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong on Logging Out',
                'error' => $th
            ], 500);
        }
    }

    //Me
}
