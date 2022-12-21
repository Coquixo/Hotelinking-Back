<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
                'password' => bcrypt($request->password)
            ]);
            $token = JWTAuth::fromUser($user);

            return response()->json([
                "success" => true,
                "message" => "Successfull registration",
                "user" => $user,
                "token" => $token
            ], 201);
        } catch (\Throwable $th) {
            response()->json([
                "success" => false,
                "message" => "Something went wrong on Registration"
            ], 500);
        }
    }

    //Login

    public function login(request $request)
    {
        try {
            $input = $request->only('email', 'password');
            $jwt_token = null;
            if (!$jwt_token = JWTAuth::attempt($input)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid Email or Password',
                ], 403);

                return response()->json([
                    'success' => true,
                    "message" => "logged in successfully",
                    'token' => $jwt_token,
                ]);
            }
        } catch (\Throwable $th) {
            response()->json([
                "success" => false,
                "message" => "Something went wrong on Registration"
            ], 500);
        }
    }

    //Logout

    public function logout()
    {
        try {
            auth()->logout();
            return response()->json([
                'success' => true,
                'message' => 'User logged out successfully'

            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong on Logging Out ' . $th->getMessage()
            ], 500);
        }
    }

    //Me

    public function me()
    {
        return response()->json(auth()->user());;
    }
}
