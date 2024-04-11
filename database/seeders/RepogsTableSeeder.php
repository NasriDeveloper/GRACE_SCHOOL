<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RepogsTableSeeder extends Seeder
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

            DB::table('repogs')->insert([
                'Name' => 'User' . $i,
                'Sex' => ($i % 2 == 0) ? 'Male' : 'Female',
                'Class' => $class,
                'Stream' => 'Science', // Replace with the appropriate stream
                'NumerousScore' => rand(50, 100),
                'NumerousSubject' => 'Numerous',
                'ReadingScore' => rand(50, 100),
                'ReadingSubject' => 'Reading',
                'WrittingScore' => rand(50, 100),
                'WrittingSubject' => 'Writting',
                'HealthCareScore' => rand(50, 100),
                'HealthCareSubject' => 'HealthCare',
                'ArtSportScore' => rand(50, 100),
                'ArtSportSubject' => 'ArtSport',
                'Sport' => 'Football', // Replace with the preferred sport
                'Cooperation' => 'Good',
                'Discipline' => 'Excellent',
                'Cleanliness' => 'Average',
                'Hardworking' => 'High',
                'PrincipalComment' => 'A promising student with great potential.',
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
