<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GraduationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('graduations')->insert([
            ['name' => 'Baccalauréat', 'slug' => 'baccalaureat'],
            ['name' => 'Licence', 'slug' => 'licence'],
            ['name' => 'Master', 'slug' => 'master'],
            ['name' => 'Doctorat', 'slug' => 'doctorat'],
            // Ajoutez d'autres diplômes si nécessaire
        ]);
    }
}
