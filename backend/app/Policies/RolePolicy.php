<?php

namespace App\Policies;

use App\Models\user;
use Illuminate\Auth\Access\Response;
use Spatie\Permission\Models\Role;

class RolePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(user $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(user $user, Role $role): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(user $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(user $user, Role $role): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(user $user, Role $role): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(user $user, Role $role): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(user $user, Role $role): bool
    {
        //
    }
}
