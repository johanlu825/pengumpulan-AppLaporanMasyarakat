<?php

namespace Database\Seeders;

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

       //   \App\Models\User::factory(10)->create([
       // 'name' => 'test user';
       // 'email' => 'test@example';
       //]);


        $this->call([
            UserSeeder::class,
        ]); 
    }
}



