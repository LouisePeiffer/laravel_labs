<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Image;
use Illuminate\Cache\TagSet;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            VideoSeeder::class,
            ServiceSeeder::class,
            DiscoverSeeder::class,
            IphoneSeeder::class,
            MapSeeder::class,
            ImageSeeder::class,
            LogoSeeder::class,
            ContactSeeder::class,
            TestimonialSeeder::class,
            TitleSeeder::class,
            GenreSeeder::class,
            CategorySeeder::class,
            CommentSeeder::class,
            TagSeeder::class,
            JobSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            PostSeeder::class,
            TagPostSeeder::class,
        ]);
    }
}
