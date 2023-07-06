<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([RoleSeeder::class]);
        User::create([
            "name" => "Francisco Rodriguez",
            "email" => "admin@admin.com",
            "password" => Hash::make("admin")
        ])->assignRole("admin");

        User::create([
            "name" => "Adriana Bonilla",
            "email" => "editor@editor.com",
            "password" => Hash::make("editor")
        ])->assignRole("editor");

        User::create([
            "name" => "Ana Elizabeth Noyola",
            "email" => "editor1@editor.com",
            "password" => Hash::make("editor")
        ])->assignRole("editor");

        User::create([
            "name" => "Juan Jose Calles",
            "email" => "admin1@admin.com",
            "password" => Hash::make("admin")
        ])->assignRole("admin");
        
        User::create([
            "name" => "Mario Solorzano",
            "email" => "editor2@editor.com",
            "password" => Hash::make("editor")
        ])->assignRole("editor");
        
        User::create([
            "name" => "Ismael Villeda",
            "email" => "editor3@editor.com",
            "password" => Hash::make("editor")
        ])->assignRole("editor");
        
        User::create([
            "name" => "Juan Jose Iglesias",
            "email" => "admin2@admin.com",
            "password" => Hash::make("admin")
        ])->assignRole("admin");

        User::create([
            "name" => "Maria Isabel Gomez",
            "email" => "editor4@editor.com",
            "password" => Hash::make("editor")
        ])->assignRole("editor");

        User::create([
            "name" => "Xiomara caceres",
            "email" => "editor5@editor.com",
            "password" => Hash::make("editor")
        ])->assignRole("editor");

        User::create([
            "name" => "Rene Isaac Melara",
            "email" => "editor6@editor.com",
            "password" => Hash::make("editor")
        ])->assignRole("editor");
        

        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
