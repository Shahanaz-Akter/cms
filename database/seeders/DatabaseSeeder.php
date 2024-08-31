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
        // \App\Models\User::factory(10)->create(); //dummy create user

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin1234@gmail.com',
            'password' => '$2y$12$hpDlhu386US3md544V6MBekkR28zqqPu9014XWvww5KL2mkSa1d/K'
        ]);
    }
}
