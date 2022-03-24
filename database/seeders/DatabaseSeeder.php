<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => ' Julian Alzate',
            'email' => 'mail@mail.com',
            'password' => bcrypt('12345678')
        ]);

        \App\Models\Post::factory(24)->create();
    }
}
