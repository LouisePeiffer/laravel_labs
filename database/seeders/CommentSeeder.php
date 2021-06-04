<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                "name"=>"Ayhan",
                "comment"=>"salut ça va?",
                "email"=>"louise@dlgbn.com",
                "day"=>date('D'),
                "month"=>date('Y'),
                "year"=>date('M'),
                "post_id"=>1,
                "validate"=>1,
            ]
        ]);
    }
}
