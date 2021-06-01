<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IphoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('iphones')->insert([
            [
                "icon"=>"flaticon-002-caliper",
                "title"=>"Get in the labou",
                "text"=>"Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],
            [
                "icon"=>"flaticon-019-coffee-cup",
                "title"=>"Projects Onlineee",
                "text"=>"Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],
            [
                "icon"=>"flaticon-020-creativity",
                "title"=>"Smart Marketing",
                "text"=>"Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],
            [
                "icon"=>"flaticon-037-idea",
                "title"=>"Get in the labii",
                "text"=>"Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],
            [
                "icon"=>"flaticon-025-imagination",
                "title"=>"Project onlinou",
                "text"=>"Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],
            [
                "icon"=>"flaticon-008-team",
                "title"=>"Smart Marketou",
                "text"=>"Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],
        ]);
    }
}
