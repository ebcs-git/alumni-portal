<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $users = [
            ['name'=>'User',
             'email' => 'user@ebcs.edu.ph',
             'password' =>  bcrypt('$ebcs1926'),
             'role' => 0
            ],
             [
                'name'=>'Admin',
                'email'=>'admin@ebcs.edu.ph',
                'role'=> 1,
                'password'=> bcrypt('$ebcs1926'),
             ],
             [
                'name'=>'SuperAdmin',
                'email'=>'superadmin@ebcs.edu.ph',
                'role'=> 2,
                'password'=> bcrypt('$ebcs1926'),
             ],
          
        ];
    
    foreach($users as $user)
    {
        User::create($user);
    }
}}
