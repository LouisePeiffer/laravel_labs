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
                "text"=>"Loremou ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam eugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.ê",
                "category_id"=>"1",
                // "tag_id"=>"1",
                "user_id" => 1,
                // "comment_id"=> 1,
                "day"=>date("d"),
                "month"=>date("M"),
                "year"=>date("Y"),
                "validate"=>1,
                "created_at"=>now(),
            ],
            [
                "title"=>"Hello Alex",
                "img"=>"blog/blog-2.jpg",
                "text"=>"Loremaaa ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.",
                "category_id"=>1,
                // "tag_id"=>"1",
                "user_id" => 1,
                // "comment_id"=>2,
                "day"=>date("d"),
                "month"=>date("M"),
                "year"=>date("Y"),
                "validate"=>1,
                "created_at"=>now(),
            ],
            [
                "title"=>"Hello Maxence",
                "img"=>"blog/blog-3.jpg",
                "text"=>"Loremiiiiiik ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.",
                "category_id"=>"1",
                // "tag_id"=>"1",
                "user_id" =>1,
                // "comment_id"=>3,
                "day"=>date("d"),
                "month"=>date("M"),
                "year"=>date("Y"),
                "validate"=>1,
                "created_at"=>now(),
            ],
            [
                "title"=>"Hello Louise",
                "img"=>"blog/blog-1.jpg",
                "text"=>"Loremiiiiiik ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.",
                "category_id"=>"1",
                // "tag_id"=>"1",
                "user_id" =>1,
                // "comment_id"=>3,
                "day"=>date("d"),
                "month"=>date("M"),
                "year"=>date("Y"),
                "validate"=>1,
                "created_at"=>now(),
            ]
        ]);
    }
}
