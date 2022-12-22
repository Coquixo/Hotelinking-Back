<?php

namespace App\Http\Controllers;

use App\Models\Code;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class CodeControler extends Controller
{

    //Getting all codes
    public function getAllCodes()
    {
        try {

            $code = DB::table('codes')->get();
            return response([
                'success' => true,
                'message' => 'All Codes:',
                'data' => $code
            ], 200);
        } catch (\Throwable $th) {
            return  response()->json([
                "success" => false,
                "message" => "Something went wrong on getting all codes"
            ]);
        }
    }
    public function generateCode(Request $request)
    {
        try {
            $newUUID = Uuid::uuid4();
            $newCode = Code::create([

                'offer_id' => $request->get('offer_id'),
                'code_UUID' => $newUUID
            ]);

            return response()->json([
                "success" => true,
                "message" => "There's your new code",
                // "code" => "{$newUUID}",
                "data" => $newCode
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "success" => false,
                "message" => "Something went wrong on Generating a Code",
                "error" => $th
            ]);
        }
    }

    public function setCodeToOffer(Request $request)
    {
    }
}
