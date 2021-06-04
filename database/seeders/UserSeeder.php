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
                "img" => "team/1.jpg",
                "role_id" => "1",
                "job_id" => "1",
                "testimonial_id"=>null,
                "email" => "admin@admin.com",
                "password" => Hash::make('adminadmin'),
                "description" => "Je suis le boss",
            ],
            [
                "firstname" => "Chrichri",
                "name" => "Chrichri",
                "age" => "30",
                "img" => "team/2.jpg",
                "role_id" => "2",
                "job_id" => "2",
                "testimonial_id"=>null,
                "email" => "personne@admin.com",
                "password" => Hash::make('autre'),
                "description" => "Je suis quelqu'un",
            ],
            [
                "firstname" => "Monsieur Admin",
                "name" => "Eric",
                "age" => "30",
                "img" => "team/3.jpg",
                "role_id" => "1",
                "job_id" => "3",
                "testimonial_id"=>null,
                "email" => "quelquun@admin.com",
                "password" => Hash::make('autre2'),
                "description" => "Je suis autre",
            ],
        ]);
    }
}
