<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            ['title' => 'PHP', 'slug' => 'php'],
            ['title' => 'Laravel', 'slug' => 'laravel'],
            ['title' => 'Javascript', 'slug' => 'javascript'],
            ['title' => 'Vue', 'slug' => 'vue'],
            ['title' => 'React', 'slug' => 'react'],
            ['title' => 'Tailwind', 'slug' => 'tailwind'],
            ['title' => 'Bootstrap', 'slug' => 'bootstrap'],
            ['title' => 'Git', 'slug' => 'git'],
            ['title' => 'Github', 'slug' => 'github'],
            ['title' => 'Docker', 'slug' => 'docker'],
            ['title' => 'AWS', 'slug' => 'aws'],
            ['title' => 'SQL', 'slug' => 'sql'],
            ['title' => 'MySQL', 'slug' => 'mysql'],
            ['title' => 'PostgreSQL', 'slug' => 'postgresql'],
            ['title' => 'Microsoft SQL Server', 'slug' => 'microsoft-sql-server'],
            ['title' => 'Sage 50', 'slug' => 'sage-50'],
            ['title' => 'Suite Microsoft Office', 'slug' => 'suite-microsoft-office'],
            ['title' => 'Adobe Photoshop', 'slug' => 'adobe-photoshop'],
            ['title' => 'Adobe Illustrator', 'slug' => 'adobe-illustrator'],
            ['title' => 'Adobe XD', 'slug' => 'adobe-xd'],
            ['title' => 'Développeur Mobile React Native', 'slug' => 'developpeur-mobile-react-native'],
            ['title' => 'Intégrateur Web', 'slug' => 'intégrateur-web'],
            ['title' => 'Intégrateur Web (Symfony, Laravel, VueJS, ReactJS, etc.)', 'slug' => 'intégrateur-web-symfony-laravel-vuejs-reactjs'],
            ['title' => 'Développement Web', 'slug' => 'developpement-web'],
        ]);
    }
}
