<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
      
        $users =  [ 
            [
                'id'     =>  1,
                'name' => 'arief,',
                'email' => 'arief21@gmail.com',
                'password' => bcrypt('arief21')
            ],
            [
                'id'     =>  2,
                'name' => 'satrio kuncoro,',
                'email' => 'satriokuncoro21@gmail.com',
                'password' => bcrypt('satriokuncoro')
            ],
            [
                'id' =>  3,
                'name' => 'caca cahyana,',
                'email' => 'cahcacahyana@gmail.com',
                'password' => bcrypt('cahyana')
            ],
            [
                'id'     =>  4,
                'name' => 'sudirman,',
                'email' => 'sudirman21@gmail.com',
                'password' => bcrypt('sudirman21')
            ],
        ];
        
        // user::insert($users);
        User::insert($users);
        

    }
}
