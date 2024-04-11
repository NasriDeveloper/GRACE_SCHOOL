<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RepogiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 20; $i++) {
            $class = ($i <= 10) ? 1 : 2;

            DB::table('repogies')->insert([
                'Name' => 'User' . $i,
                'Sex' => ($i % 2 == 0) ? 'Male' : 'Female',
                'Class' => $class,
                'Stream' => 'Arts', // Replace with the appropriate stream
                'EnglishScore' => rand(50, 100),
                'EnglishSubject' => 'English',
                'KiswahiliScore' => rand(50, 100),
                'KiswahiliSubject' => 'Kiswahili',
                'CivicsMoralScore' => rand(50, 100),
                'CivicsMoralSubject' => 'CivicsMoral',
                'SocialStudiesScore' => rand(50, 100),
                'SocialStudiesSubject' => 'SocialStudies',
                'ScienceTechnScore' => rand(50, 100),
                'ScienceTechnSubject' => 'ScienceTechn',
                'MathematicsScore' => rand(50, 100),
                'MathematicsSubject' => 'Mathematics',
                'vskillsScore' => rand(50, 100),
                'vskillsSubject' => 'vskills',
                'Sport' => 'Basketball', // Replace with the preferred sport
                'Cooperation' => 'Good',
                'Discipline' => 'Excellent',
                'Cleanliness' => 'Average',
                'Hardworking' => 'High',
                'PrincipalComment' => 'A dedicated student with a passion for learning.',
                'ClassTeacher' => 'Teacher' . $i,
                'PhoneNo' => '1234567890',
                'PrincipalName' => 'Principal Name',
                'PhoneN' => '9876543210',
                'Signature' => 'Principal Signature',
                'DateOf' => '2',
                'photo' => 'path/to/photo1.jpg',
                'photo1' => 'path/to/photo2.jpg',
                'photo2' => 'path/to/photo3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
