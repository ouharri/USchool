<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use Illuminate\Http\JsonResponse;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        try {
            $roles = Role::all();
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
        return response()->json($roles, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request): JsonResponse
    {
        if (Role::where('name', $request->name)->exists()) {
            return response()->json(['message' => 'Role already exists'], 500);
        }
        try {
            Role::create($request->all());
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
        return response()
            ->json(['message' => 'Role created successfully'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role): JsonResponse
    {
        try {
            $role->update($request->all());
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
        return response()
            ->json(['message' => 'Role updated successfully'], 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role): JsonResponse
    {
        try {
            $role->delete();
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
        return response()
            ->json(['message' => 'Role deleted successfully'], 200);
    }

    /**
     * give permission in role
     */
    public function givePermission(StorePermissionRequest $request, Role $role): JsonResponse
    {
        if (Permission::where('name', $request->name)->doesntExist()) {
            return response()->json(['message' => 'Permission not exist.'], 500);
        }
        if ($role->hasPermissionTo($request->name)) {
            return response()->json(['message' => 'Permission already exist.'], 500);
        }
        $role->givePermissionTo($request->name);
        return response()->json(['message' => 'Permission given.'], 200);
    }

    /**
     * remove permission in role
     */
    public function revokePermission(Role $role, Permission $permission): JsonResponse
    {
        if ($role->hasPermissionTo($permission)) {
            try {
                $role->revokePermissionTo($permission);
            } catch (\Exception $e) {
                return response()->json(['message' => $e->getMessage()], 500);
            }
            return response()->json(['message' => 'Permission revoked.'], 200);
        }
        return response()->json(['message' => 'Permission not exist.'], 500);
    }
}
