<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            DB::table('customers')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
               'country_id' => rand(1, 10),  // Assuming you have at least 10 countries in your countries table
                'state_id' => rand(1, 10),    // Assuming you have at least 10 states in your states table
                'city_id' => rand(1, 10),     // Assuming you have at least 10 cities in your cities table
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    
    }
}
