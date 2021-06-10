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
                "firstname" => "Admin",
                "name" => "Admillington",
                "age" => 30,
                "genre_id" => 1,
                "img" => "team/1.jpg",
                "role_id" => 1,
                "job_id" => 1,
                "testimonial_id"=>null,
                "email" => "admin@admin.com",
                "password" => Hash::make('adminadmin'),
                "description" => "Je suis admin",
                "validate"=>1,
            ],
            [
                "firstname" => "Webmaster",
                "name" => "Webmasterington",
                "age" => 32,
                "genre_id" => 2,
                "img" => "team/2.jpg",
                "role_id" => 2,
                "job_id" => 2,
                "testimonial_id"=>null,
                "email" => "webmaster@webmaster.com",
                "password" => Hash::make('webmasterwebmaster'),
                "description" => "Je suis webmaster",
                "validate"=>1,
            ],
            [
                "firstname" => "Editeur",
                "name" => "Editeurington",
                "age" => 34,
                "genre_id" => 3,
                "img" => "team/3.jpg",
                "role_id" => 3,
                "job_id" => 3,
                "testimonial_id"=>null,
                "email" => "editer@editer.com",
                "password" => Hash::make('editerediter'),
                "description" => "Je suis editeur",
                "validate"=>1,
            ],
            [
                "firstname" => "Membre",
                "name" => "Membrington",
                "age" => 36,
                "genre_id" => 3,
                "img" => "team/3.jpg",
                "role_id" => 4,
                "job_id" => 8,
                "testimonial_id"=>null,
                "email" => "membre@membre.com",
                "password" => Hash::make('membremembre'),
                "description" => "Je suis membre",
                "validate"=>0,
            ],
        ]);
    }
}
