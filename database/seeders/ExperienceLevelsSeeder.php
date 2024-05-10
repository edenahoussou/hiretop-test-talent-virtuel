<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceLevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experience_levels')->insert([
            ['title' => 'Débutant', 'slug' => 'debutant'],
            ['title' => '0 à 6 mois', 'slug' => '0-6-mois'],
            ['title' => '1 an', 'slug' => '1-an'],
            ['title' => '2 ans', 'slug' => '2-ans'],
            ['title' => '3 ans', 'slug' => '3-ans'],
            ['title' => '4 ans', 'slug' => '4-ans'],
            ['title' => '5 ans', 'slug' => '5-ans'],
            ['title' => '6 ans et plus', 'slug' => '6-ans-et-plus'],
        ]);
    }
}
