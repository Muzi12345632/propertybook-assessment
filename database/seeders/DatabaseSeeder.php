<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        \App\Models\User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
             'password' => Hash::make('password'),
             'phone_number'=> '0789844536',
        ]);


        //\App\Models\User::services()->create(6);

        \App\Models\pricing::factory( 3)->create();
        \App\Models\services::factory( 6)->create();
        //\App\Models\user::factory( 1)->create();


        //TODO seed the following list items

        // posts
        // location
        // categories


        
    }
}
