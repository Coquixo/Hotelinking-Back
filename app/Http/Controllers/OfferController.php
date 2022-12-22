<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OfferController extends Controller
{
    public function getAllOffers()
    {
        try {
            $offer = DB::table('offers')->get();
            return response()->json([
                "success" => true,
                "data" => $offer
            ]);
        } catch (\Throwable $th) {
            return  response()->json([
                "success" => false,
                "message" => "Something went wrong on Getting All Offers"
            ]);
        }
    }
}
