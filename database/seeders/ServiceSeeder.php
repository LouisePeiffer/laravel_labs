<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                "icon_id"=>1,
                "title"=>"Get In The Labbbb",
                "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at"=>now()
            ],
            [
                "icon_id"=>2,
                "title"=>"Projects Online",
                "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at"=>now()
            ],
            [
                "icon_id"=>3,
                "title"=>"Smart Marketing",
                "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at"=>now()
            ],
            [
                "icon_id"=>4,
                "title"=>"Social Media",
                "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at"=>now()
            ],
            [
                "icon_id"=>5,
                "title"=>"Brainstorming",
                "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at"=>now()
            ],
            [
                "icon_id"=>6,
                "title"=>"Documented",
                "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at"=>now()
            ],
            [
                "icon_id"=>7,
                "title"=>"Responsive",
                "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at"=>now()
            ],[
                "icon_id"=>8,
                "title"=>"Retina Ready",
                "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at"=>now()
            ],[
                "icon_id"=>9,
                "title"=>"Ultra Modern",
                "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at"=>now()
            ],
        ]);
    }
}
