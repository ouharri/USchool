<?php

namespace Database\Seeders\Auth;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $permissionsName = [
            'create-users',
            'edit-users',
            'delete-users',
            'view-users',
            'create-roles',
            'edit-roles',
            'delete-roles',
            'view-roles',
            'super-admin',
            'create-permissions',
            'setting-edit',
            // add more permissions as needed
        ];

        $permissions = collect($permissionsName)->map(function ($permission) {
            return ['name' => $permission, 'guard_name' => 'api'];
        });

        permission::insert($permissions->toArray());

        $role = Role::create(['name' => 'super-admin'])
            ->givePermissionTo($permissionsName);
    }
}
