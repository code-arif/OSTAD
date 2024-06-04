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
        $numberOfCustomers = 50;

        for($i = 0; $i < $numberOfCustomers; $i++){
            DB::table('customers')->insert([
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'mobile' => $faker->phoneNumber(),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
