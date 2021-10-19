<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    
    
    /**
     * Run the database seeds.
     *
     * 
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            
            [
                'role_id' => 1,
                'name' => 'Louis',
                'email' => 'louis@gmail.com',
                'password' => 'abc123'
            ],

            [
                'role_id' => 2,
                'name' => 'Michael',
                'email' => 'michael@gmail.com',
                'password' => 'abc111'
            ],

            [
                'role_id' => 3,
                'name' => 'Hendri',
                'email' => 'hendri@gmail.com',
                'password' => 'abc555'
            ]
        ]);
    }
}
