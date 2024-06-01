<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Profile;
use App\Models\Student;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Student::factory(10)->create()
        ->each(function($student){
            $student->profile()->save(Profile::factory()->make());
        })
        
        ->each(function($student){
            $student->comments()->saveMany(Comment::factory(5)->make());
        });
    }
}
