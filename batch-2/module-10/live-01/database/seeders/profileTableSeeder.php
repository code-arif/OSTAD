<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Profile;

class profileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 50; $i++){
            $faker = Faker::create();
            $profile = new Profile();
            $profile->user_id = $i + 1;
            $profile->firstName = $faker->firstName;
            $profile->lastName = $faker->lastName;
            $profile->phone = $faker->phoneNumber;
            $profile->dob = $faker->date();
            $profile->age = $faker->numberBetween(18,70);
            $profile->save();
        }
    }
}
