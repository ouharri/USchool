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
            'first_name' => 'outman',
            'last_name' => 'ouharri',
            'email' => 'ouharrioutman@gmail.com',
            'avatar' => 'https://res.cloudinary.com/dggvib6ib/image/upload/v1681812034/ts_zdrfoj.jpg',
            'email_verified_at' => now(),
            'password' => bcrypt('123456789'), // password
            'remember_token' => Str::random(10),
        ]);
        $user->assignRole('SUPER_ADMIN');

    }
}
