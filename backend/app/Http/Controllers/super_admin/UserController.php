<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\StoreRoleRequest;
use App\Models\user;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        try {
            $users = User::with('roles')->get();
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
        return response()->json($users);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): JsonResponse
    {
        try {
            $roles = Role::all();
            $permissions = Permission::all();
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
        return response()->json([
            'user' => $user,
            'roles' => $roles,
            'permissions' => $permissions,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): JsonResponse
    {
        if ($user->hasRole('admin')) {
            return response()->json(['message' => 'Admin can not be deleted.'], 500);
        }
        try {
            $user->delete();
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
        return response()->json(['message' => 'User deleted successfully']);
    }

    public function assignRole(StoreRoleRequest $request, User $user): JsonResponse
    {
        if ($user->hasRole($request->name)) {
            return response()->json(['message' => 'Role exists.'], 500);
        }
        try {
            $user->assignRole($request->name);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
        return response()->json(['message' => 'Role assigned successfully']);
    }

    public function removeRole(User $user, Role $role): JsonResponse
    {
        if ($user->hasRole($role)) {
            try {
                $user->removeRole($role);
            } catch (Exception $e) {
                return response()->json(['message' => $e->getMessage()], 500);
            }
            return response()->json(['message' => 'Role removed successfully']);
        }
        return response()->json(['message' => 'Role does not exists.'], 500);
    }

    public function givePermission(StorePermissionRequest $request, User $user): JsonResponse
    {
        if ($user->hasPermissionTo($request->name)) {
            return response()->json(['message' => 'Permission exists.'], 500);
        }
        try {
            $user->givePermissionTo($request->name);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
        return response()->json(['message' => 'Permission given successfully']);
    }

    public function revokePermission(User $user, Permission $permission): JsonResponse
    {
        if ($user->hasPermissionTo($permission)) {
            try {
                $user->revokePermissionTo($permission);
            } catch (Exception $e) {
                return response()->json(['message' => $e->getMessage()], 500);
            }
            return response()->json(['message' => 'Permission revoked successfully']);
        }
        return response()->json(['message' => 'Permission does not exists.'], 500);
    }

}
