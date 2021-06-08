<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titles')->insert([
            [
                "title"=>"GET IN (THE LAB) AND DISCOVER THE WORLD",
            ],
            [
                "title"=>"WHAT OUR CLIENTS SAY",
            ],
            [
                "title"=>"GET IN (THE LAB) AND SEE THE SERVICES",
            ],
            [
                "title"=>"GET IN (THE LAB) AND MEET THE TEAM",
            ],
        ]);
    }
}
