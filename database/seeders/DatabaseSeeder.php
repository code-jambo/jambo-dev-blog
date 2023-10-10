<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            Setting::class,
        ]);
        \App\Models\User::create([
            'name' => 'Code Jambo',
            'email' => 'jambo@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}