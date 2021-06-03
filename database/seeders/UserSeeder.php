<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "firstname" => "Monsieur Admin",
                "name" => "Admillington",
                "age" => "30",
                "img" => "anonyme.jpg",
                "role_id" => "1",
                "job_id" => "1",
                "testimonial_id"=>null,
                "email" => "admin@admin.com",
                "password" => Hash::make('adminadmin'),
            ]
        ]);
    }
}
