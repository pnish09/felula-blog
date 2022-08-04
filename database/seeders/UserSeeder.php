<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

        $data = [[
            'name' => 'Admin',
            'email' => 'nish09.lingam@gmail.com',
            'password' => bcrypt('Felula'),
            'role' => 'admin'
        ], [
            'name' => 'Nish',
            'email' => 'nish@gmail.com',
            'password' => bcrypt('user1'),
            'role' => 'user'
        ],[
            'name' => 'Lingam',
            'email' => 'lingam@gmail.com',
            'password' => bcrypt('user2'),
            'role' => 'user'
        ]];
        User::insert($data);
    }
}
