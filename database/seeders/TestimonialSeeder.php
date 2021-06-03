<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            [
                "firstname"=>"Maxence",
                "name"=>"Lemaire",
                "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Coucouuuuuuu",
                "img"=>"anonyme.jpg",
                "job"=>"Bad B"
            ],
            [
                "firstname"=>"Ayhan",
                "name"=>"Caliskan",
                "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Coucouuuuuuu",
                "img"=>"anonyme.jpg",
                "job"=>"Footeux"
            ],
            [
                "firstname"=>"Ayoub",
                "name"=>"El Abed",
                "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Coucouuuuuuu",
                "img"=>"anonyme.jpg",
                "job"=>"Codeur"
            ],
            [
                "firstname"=>"Zakaria",
                "name"=>"Le Boss",
                "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Coucouuuuuuu",
                "img"=>"anonyme.jpg",
                "job"=>"Gardien Zoo"
            ],
            [
                "firstname"=>"Jamila",
                "name"=>"Bg",
                "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Coucouuuuuuu",
                "img"=>"anonyme.jpg",
                "job"=>"Coach Molengeek"
            ],
            [
                "firstname"=>"Béné",
                "name"=>"Dupont",
                "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Coucouuuuuuu",
                "img"=>"anonyme.jpg",
                "job"=>"Camioneuse"
            ],
        ]);
    }
}
