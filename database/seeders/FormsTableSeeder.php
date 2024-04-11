<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FormsTableSeeder extends Seeder
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
            DB::table('forms')->insert([
                'firstName' => $faker->firstName,
                'middleName' => $faker->lastName,
                'lastName' => $faker->lastName,
                'parentfirstName' => $faker->firstName,
                'parentlastName' => $faker->lastName,
                'class' => $faker->randomDigit,
                'yearOfEntry' => $faker->year,
                'gender' => $faker->randomElement(['male', 'female']),
                'dob' => $faker->date,
                'nationality' => $faker->country,
                'placeOfBirth' => $faker->city,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
