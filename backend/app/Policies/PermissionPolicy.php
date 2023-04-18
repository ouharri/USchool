<?php

namespace App\Policies;

use App\Models\super_admin\Permission;
use App\Models\user;
use Illuminate\Auth\Access\Response;

class PermissionPolicy
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
    public function view(user $user, Permission $permission): bool
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
    public function update(user $user, Permission $permission): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(user $user, Permission $permission): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(user $user, Permission $permission): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(user $user, Permission $permission): bool
    {
        //
    }
}
