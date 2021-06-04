<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            [
                "subject"=>"Connection problems"
            ],
            [
                "subject"=>"More info"
            ],
            [
                "subject"=>"Technical difficulties"
            ],
            [
                "subject"=>"Appreciation"
            ],
        ]);
    }
}
