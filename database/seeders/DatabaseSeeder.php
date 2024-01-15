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
         \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Task::factory(5)->create();
        \App\Models\Task::factory()->create([
         'name' => 'Test User',
         'description' => 'Descripcio Sbaay',
         'completed' => true,
        ]);

        \App\Models\User::factory(5)->create();
        \App\Models\User::factory()->create([
            'name' => 'Guillem',
            'email' => 'gsancho@iesebre.com',
            'password' => 'guillem1589',
        ]);
    }
}
