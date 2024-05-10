<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyLocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $addresses = [
            "Rue 1, Dakar, Sénégal",
            "Avenue 2, Abidjan, Côte d'Ivoire",
            "Route 3, Accra, Ghana",
            "Place 4, Kinshasa, Congo",
            "Boulevard 5, Kinshasa, Congo",
            "Chemin 6, Kinshasa, Congo",
            "Rue 7, Kinshasa, Congo",
            "Boulevard 8, Kinshasa, Congo",
            "Chemin 9, Kinshasa, Congo",
            "Rue 10, Kinshasa, Congo",
            "Boulevard des Armées 11, Casablanca, Maroc",
            "Place 12, Casablanca, Maroc",
            "Etoile Rouge, Cotonou , Bénin",
            "Rue 13, Ouagadougou, Burkina Faso",
            "Avenue 14, Ouagadougou, Burkina Faso",
            "Rue 15, Ouagadougou, Burkina Faso",
            // Ajoutez d'autres adresses d'Afrique de l'Ouest ici
        ];

        foreach ($addresses as $address) {
            DB::table('company_locations')->insert([
                'address' => $address,
                'slug' => Str::slug($address),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
