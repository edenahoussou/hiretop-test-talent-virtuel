<?php

namespace Database\Seeders;

use App\Models\JobType;
use Illuminate\Database\Seeder;

class JobTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobType::create(['name' => 'Temps plein', 'slug' => 'full-time']);
        JobType::create(['name' => 'Temps partiel', 'slug' => 'part-time']);
        JobType::create(['name' => 'Contrat', 'slug' => 'contract']);
    }
}
