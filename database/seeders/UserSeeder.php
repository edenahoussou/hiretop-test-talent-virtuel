<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            'name' => 'Eden Ahoussou', 
            'email' => 'aedenrosario@gmail.com', 
            'password' => bcrypt('laurenda'), 
            'remember_token' => null, 
            'email_verified_at' => now()
        ]);
        $user1->assignRole('Entreprise');

        $user2 = User::create([
            'name' => 'Admin', 
            'email' => 'admin@admin', 
            'password' => bcrypt('laurenda'), 
            'remember_token' => null, 
            'email_verified_at' => now()
        ]);
        $user2->assignRole('Admin');

        $user3 = User::create([
            'name' => 'Talent', 
            'email' => 'talent@talent', 
            'password' => bcrypt('laurenda'), 
            'remember_token' => null, 
            'email_verified_at' => now()
        ]);
        $user3->assignRole('Talent');

        $user4 = User::create([
            'name' => 'Entreprise', 
            'email' => 'enterprise@enterprise', 
            'password' => bcrypt('laurenda'), 
            'remember_token' => null, 
            'email_verified_at' => now()
        ]);
        $user4->assignRole('Entreprise');
    }
}
