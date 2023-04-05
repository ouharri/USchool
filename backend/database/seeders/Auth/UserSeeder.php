<?php

namespace Database\Seeders\Auth;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Test User',
            'email' => 'ouharrioutman@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole('super-admin');
    }
}
