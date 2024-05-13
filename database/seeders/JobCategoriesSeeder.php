<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_categories')->insert([
           ['name' => 'IT', 'slug' => 'it'],
           ['name' => 'Marketing', 'slug' => 'marketing'],
           ['name' => 'Logistique', 'slug' => 'logistique'],
           ['name' => 'Vente', 'slug' => 'vente'],
           ['name' => 'Venture', 'slug' => 'venture'],
           ['name' => 'Recherche', 'slug' => 'recherche'],
           ['name' => 'Design', 'slug' => 'design'],
           ['name' => 'Communication', 'slug' => 'communication'],
           ['name' => 'Salle', 'slug' => 'salle'],
           ['name' => 'Informatique', 'slug' => 'informatique'],
           ['name' => 'Entrepreneur', 'slug' => 'entrepreneur'],
           ['name' => 'Gestion', 'slug' => 'gestion'],
           ['name' => 'Fonctionnaire', 'slug' => 'fonctionnaire'],
           ['name' => 'Banque', 'slug' => 'banque'],
           ['name' => 'Assurance', 'slug' => 'assurance'],
           ['name' => 'Expertise', 'slug' => 'expertise'],
           ['name' => 'Etude', 'slug' => 'etude'],
           ['name' => 'Education', 'slug' => 'education'],
           ['name' => 'Conseil', 'slug' => 'conseil'],
           ['name' => 'Consultance', 'slug' => 'consultance'],
           ['name' => 'Entreprise', 'slug' => 'entreprise'],
           ['name' => 'Recrutement', 'slug' => 'recrutement'],
           ['name' => 'Formation', 'slug' => 'formation'],
           ['name' => 'Stage', 'slug' => 'stage'],
           ['name' => 'Vie associative', 'slug' => 'vie-associative'],
           ['name' => 'Vie professionnelle', 'slug' => 'vie-professionnelle'],
           ['name' => 'Liberal professionnelle', 'slug' => 'liberal-professionnelle'],
           ['name' => 'Sante', 'slug' => 'sante'],
           ['name' => 'Social', 'slug' => 'social'],
           ['name' => 'Environnement', 'slug' => 'environnement'],
           ['name' => 'Energie', 'slug' => 'energie'],
           ['name' => 'Transport', 'slug' => 'transport'],]);
    }
}
