<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ParentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('parents')->insert([
                'fatherName' => $faker->name,
                'fatherFname' => $faker->firstName,
                'fatherAddress' => $faker->address,
                'fatherPhone' => $faker->phoneNumber,
                'fatherOccupation' => $faker->jobTitle,
                'fatherEducation' => $faker->randomElement(['High School', 'College', 'University']),
                'fatherNID' => $faker->randomNumber(8),
                'fatherReligion' => $faker->randomElement(['Christianity', 'Islam', 'Hinduism', 'Buddhism']),
                'fatherPhoto' => $faker->imageUrl(), // Adjust accordingly for file paths

                'MotherName' => $faker->name,
                'motherCname' => $faker->firstName,
                'motherAddress' => $faker->address,
                'motherPhone' => $faker->phoneNumber,
                'motherOccupation' => $faker->jobTitle,
                'motherEducation' => $faker->randomElement(['High School', 'College', 'University']),
                'motherNID' => $faker->randomNumber(8),
                'motherReligion' => $faker->randomElement(['Christianity', 'Islam', 'Hinduism', 'Buddhism']),
                'motherPhoto' => $faker->imageUrl(), // Adjust accordingly for file paths

                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
