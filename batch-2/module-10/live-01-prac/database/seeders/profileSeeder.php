<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Profile;

class profileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i < 20; $i++){
            $faker = Faker::create();
            $profile = new Profile();
            $profile->user_id = $i + 1;
            $profile->firstName = $faker->firstName;
            $profile->lastName = $faker->lastName;
            $profile->phone = $faker->phoneNumber;
            $profile->image = $faker->image;
            $profile->address = $faker->address;
            $profile->location = $faker->country;
            $profile->dob = $faker->date();
            $profile->age = $faker->numberBetween(18,50);
            $profile->save();

        }
    }
}
