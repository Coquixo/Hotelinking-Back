<?php

namespace Database\Seeders;

use App\Models\Code;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('code')->insert([
            [
                "code_UUID" => "843325135",
                "offer_id" => "1"
            ],
            [
                "code_UUID" => "654651322",
                "offer_id" => "2"
            ],
            [
                "code_UUID" => "654965455",
                "offer_id" => "1"
            ],
            [
                "code_UUID" => "713216865",
                "offer_id" => "3"
            ],
            [
                "code_UUID" => "112346657",
                "offer_id" => "4"
            ],
        ]);
    }
}
