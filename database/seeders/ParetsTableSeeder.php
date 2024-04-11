<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ParetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Loop through classes 1 to 7
        for ($class = 1; $class <= 7; $class++) {
            // Create 10 users for each class
            for ($i = 1; $i <= 10; $i++) {
                DB::table('parets')->insert([
                    'fatherName' => $faker->firstName,
                    'fatherFname' => $faker->lastName,
                    'Class' => $class,
                    'email' => $faker->unique()->safeEmail,
                    'fatherAddress' => $faker->address,
                    'fatherPhone' => $faker->phoneNumber,
                    'fatherOccupation' => $faker->jobTitle,
                    'fatherEducation' => $faker->word,
                    'fatherNID' => $faker->uuid,
                    'fatherReligion' => $faker->word,
                    'fatherPhoto' => null, // Adjust accordingly

                    'MotherName' => $faker->firstName,
                    'motherCname' => $faker->lastName,
                    'motherAddress' => $faker->address,
                    'motherPhone' => $faker->phoneNumber,
                    'motherOccupation' => $faker->jobTitle,
                    'motherEducation' => $faker->word,
                    'motherNID' => $faker->uuid,
                    'motherReligion' => $faker->word,
                    'motherPhoto' => null, // Adjust accordingly

                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
