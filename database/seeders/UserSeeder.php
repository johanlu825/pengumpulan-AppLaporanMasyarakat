<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =  [ 
            [
                
                'name' => 'arief,',
                'email' => 'arief21@gmail.com',
                'password' => bcrypt('admin')
            ],
            [
                
                'name' => 'satrio kuncoro,',
                'email' => 'satriokuncoro21@gmail.com',
                'password' => bcrypt('tamu')
            ],
            [
                
                'name' => 'caca cahyana,',
                'email' => 'cahcacahyana@gmail.com',
                'password' => bcrypt('admin')
            ],
        
        ];
        
        user::insert($users); 
        // User::insert($users);
        // User
        
    }
}
