<?php

namespace Database\Seeders;

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
        $this->call(JobTypeSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(GraduationsSeeder::class);
        $this->call(ExperienceLevelsSeeder::class);
        $this->call(IndustriesSeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(JobCategoriesSeeder::class);

    }
}
