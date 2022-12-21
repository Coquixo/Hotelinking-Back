<?php

namespace Database\Seeders;

use App\Models\Offer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offer')->insert([
            ["offer_Name" => "2x1"],
            ["offer_Name" => "5x1"],
            ["offer_Name" => "4x1"],
            ["offer_Name" => "50%"],
            ["offer_Name" => "25%"],
            ["offer_Name" => "100€"],

        ]);
    }
}
