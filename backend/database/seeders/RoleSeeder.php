<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'USER']);
        Role::create(['name' => 'STUDENT']);
        Role::create(['name' => 'DIRECTOR']);
        Role::create(['name' => 'SUPER_ADMIN']);
    }
}
