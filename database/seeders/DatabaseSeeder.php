<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'contact_no' => '123',
            'email' => 'admin@test.com']);

        \App\Models\Interest::insert([
            ['name' => 'Reading'],
            ['name' => 'Cooking'],
            ['name' => 'Watching TV'],
            ['name' => 'Basketball'],
        ]);
    }
}
