<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                "title"=>"Hello World",
                "img"=>"anonyme.jpg",
                "text"=>"Lorem lorem lorem",
                "category_id"=>"1",
                "tag_id"=>"1",
                "comment_id"=>null,
            ]
        ]);
    }
}
