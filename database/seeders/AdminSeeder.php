<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{

    public function run(): void
    {
        $name = 'Jay Alvin Gwapo';
        $email = 'jayalvin@gmail.com';
        $role = 'Admin';
        $status = 'Active';


        DB::table('users')->insert ([
            [
                'name' => $name,
                'email' => $email,
                'role' => $role,
                'status' => $status,
                'password' => Hash::make('11111111'),
                'remember_token' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}