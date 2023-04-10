<?php

namespace Database\Seeders;

use App\Models\user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = user::create([
            'name' => 'outman ouharri',
            'email' => 'ouharrioutman@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456789'), // password
            'remember_token' => Str::random(10),
        ]);
        $user->assignRole('SUPER_ADMIN');

    }
}
