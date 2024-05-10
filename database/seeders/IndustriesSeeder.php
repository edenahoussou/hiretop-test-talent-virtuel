<?php

namespace Database\Seeders;

use App\Models\Industry;
use Illuminate\Database\Seeder;

class IndustriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $name = $faker->unique()->word;
            Industry::create([
                'name' => $name,
                'icon' => $faker->imageUrl(100, 100),
                'status' => $faker->boolean(90) // 90% chance of being true
            ]);
        }
    }
}
