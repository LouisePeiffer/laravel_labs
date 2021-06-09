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
                "icon_id"=>1,
                "title"=>"Get in the labou",
                "text"=>"Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],
            [
                "icon_id"=>2,
                "title"=>"Projects Onlineee",
                "text"=>"Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],
            [
                "icon_id"=>3,
                "title"=>"Smart Marketing",
                "text"=>"Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],
            [
                "icon_id"=>4,
                "title"=>"Get in the labii",
                "text"=>"Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],
            [
                "icon_id"=>5,
                "title"=>"Project onlinou",
                "text"=>"Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],
            [
                "icon_id"=>6,
                "title"=>"Smart Marketou",
                "text"=>"Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
            ],
        ]);
    }
}
