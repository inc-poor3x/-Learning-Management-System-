<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


         DB::table('users')->insert([
            [

            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gamil.com',
            'password' =>Hash::make('111'),
            'role'=>'admin',
            'status'=>'1',

            ],
            // instructor
            [

                'name' => 'instructor',
                'username' => 'instructor',
                'email' => 'instructor@gamil.com',
                'password' =>Hash::make('111'),
                'role'=>'instructor',
                'status'=>'1',

                ],
                // user data
                [

                    'name' => 'user',
                    'username' => 'user',
                    'email' => 'user@gamil.com',
                    'password' =>Hash::make('111'),
                    'role'=>'user',
                    'status'=>'1',
                    ],


        ]);
    }
}
