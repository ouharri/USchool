<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdatePermissionRequest;
use Exception;
use Illuminate\Http\JsonResponse;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        try {
            $permissions = Permission::all();
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
        return response()->json($permissions);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePermissionRequest $request): JsonResponse
    {
        try {
            Permission::create($request->all());
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
        return response()
            ->json(['message' => 'Permission created successfully']);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(StorePermissionRequest $request, Permission $permission): JsonResponse
    {
        try {
            $permission->update($request->all());
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
        return response()
            ->json(['message' => 'Permission updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission): JsonResponse
    {
        try {
            $permission->delete();
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
        return response()
            ->json(['message' => 'Permission deleted successfully']);
    }

    public function assignRole(UpdatePermissionRequest $request, Permission $permission): JsonResponse
    {
        if(!Role::where('name', $request->name)->exists()) {
            return response()->json(['message' => 'Role does not exist.'], 500);
        }
        if ($permission->hasRole($request->name)) {
            return response()->json(['message' => 'Role already assigned.'], 500);
        }
        try {
            $permission->assignRole($request->name);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
        return response()->json(['message' => 'Role assigned successfully.']);
    }

    public function removeRole(Permission $permission, Role $role): JsonResponse
    {
        if ($permission->hasRole($role)) {
            try {
                $permission->removeRole($role);
            } catch (Exception $e) {
                return response()->json(['message' => $e->getMessage()], 500);
            }
            return response()->json(['message' => 'Role removed successfully.']);
        }
        return response()->json(['message' => 'Role not assigned.'], 500);
    }
}
