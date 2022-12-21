<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            [
                "name" => "Alex",
                "surname" => "López",
                "email" => "coquixo98@gmail.com",
                "password" => "Marcelo1234",
                "codes" => "1"
            ],
            [
                "name" => "Example",
                "surname" => "Number1",
                "email" => "example1@gmail.com",
                "password" => "Example1234",
                "codes" => "2"
            ],
            [
                "name" => "Hotelinking",
                "surname" => "Test",
                "email" => "Hotelinking@gmail.com",
                "password" => "Password1234",
                "codes" => "4"
            ]
        ]);
    }
}
