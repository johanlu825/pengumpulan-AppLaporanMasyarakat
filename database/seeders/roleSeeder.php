<?php

namespace Database\Seeders;

use App\Models\role;
use Illuminate\Database\Seeder;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name'  => 'admin'
            ],
            [
                'name'  => 'pelanggan'
            ]
        ];

        // memanggil nama model class role
        role::insert($roles);
    }
}
