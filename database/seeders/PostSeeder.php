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
                "img"=>"blog/blog-1.jpg",
                "text"=>"Lorem lorem lorem",
                "category_id"=>"1",
                "tag_id"=>"1",
                "user_id" => "1",
                "comment_id"=>"1",
                "day"=>date("d"),
                "month"=>date("M"),
                "year"=>date("Y"),
                "created_at"=>now(),
            ],
            [
                "title"=>"Hello World",
                "img"=>"blog/blog-2.jpg",
                "text"=>"Lorem lorem lorem",
                "category_id"=>"1",
                "tag_id"=>"1",
                "user_id" => "1",
                "comment_id"=>"1",
                "day"=>date("d"),
                "month"=>date("M"),
                "year"=>date("Y"),
                "created_at"=>now(),
            ],
            [
                "title"=>"Hello World",
                "img"=>"blog/blog-3.jpg",
                "text"=>"Lorem lorem lorem",
                "category_id"=>"1",
                "tag_id"=>"1",
                "user_id" => "1",
                "comment_id"=>"1",
                "day"=>date("d"),
                "month"=>date("M"),
                "year"=>date("Y"),
                "created_at"=>now(),
            ]
        ]);
    }
}
