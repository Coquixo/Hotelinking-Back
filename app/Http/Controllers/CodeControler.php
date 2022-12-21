<?php

namespace App\Http\Controllers;

use App\Models\Code;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class CodeControler extends Controller
{

    //Getting all codes
    public function getAllCodes()
    {
        try {

            $code = Code::table('codeName')->get();
            response()->$code;
        } catch (\Throwable $th) {
            response()->json([
                "success" => false,
                "message" => "Something went wrong on getting all codes"
            ]);
        }
    }
    public function
    generateCode()
    {
        try {
            $newUUID = Uuid::uuid4();
            return $newUUID;
        } catch (\Throwable $th) {
            response()->json([
                "success" => false,
                "message" => "Something went wrong on Generating a Code"
            ]);
        }
    }
}
