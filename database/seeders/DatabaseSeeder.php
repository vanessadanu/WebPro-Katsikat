<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(UsersTableSeeder::class);

        // $faker = Faker::create('id_US');

        // for ($i=1; $i <= 10; $i++) { 
        //     User::create([
        //         'name' => $faker->address,
        //         'email' => $faker->email,
        //         'password' => '',
        //     ]);
        // }
    }
}
