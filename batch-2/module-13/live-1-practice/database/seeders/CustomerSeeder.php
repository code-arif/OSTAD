<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = fake();
        $numberOfCustomer = 50;
        for($i=0; $i<+$numberOfCustomer; $i++){
            DB::table('customers')->insert([
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'mobile' => $faker->phoneNumber(),
                'address' => $faker->streetAddress(),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
