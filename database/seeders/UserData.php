<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'username' => 'admin',
                'email' => 'anwarisaepul@gmail.com',
                'password' => bcrypt('@admin123'),
                'role_id' => 1,
                'status' => 1
            ]
            ];

            foreach ($user as $key => $value) {
                User::create($value);
            }
    }
}
