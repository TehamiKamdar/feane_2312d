<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\ProductSeeder;
use Database\Seeders\CategorySeeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                "name" => "Tehami",
                "email" => "tehami@aptechgdn.net",
                "password" => Hash::make('12345678'),
                "role" => 0,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Abubakar",
                "email" => "abubakar@aptechgdn.net",
                "password" => Hash::make('12345678'),
                "role" => 1,
                "created_at" => now(),
                "updated_at" => now()
            ]
        ]);

        $this->call([
            CategorySeeder::class,
            ProductSeeder::class
        ]);
    }
}
