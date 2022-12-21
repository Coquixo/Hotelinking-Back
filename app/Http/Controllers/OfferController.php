<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function getAllOffers()
    {
        try {
            $offer = Offer::table('offer')->get();
            response()->$offer;
        } catch (\Throwable $th) {
            response()->json([
                "success" => false,
                "message" => "Something went wrong on Getting All Offers"
            ]);
        }
    }
}
