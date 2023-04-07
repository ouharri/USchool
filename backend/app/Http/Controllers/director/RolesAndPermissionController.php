<?php

namespace App\Http\Controllers\director;

use App\Http\Controllers\Controller;
use App\Http\Requests\director\RolesStoreRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RolesAndPermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        echo 'hhh';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RolesStoreRequest $request)
    {
        echo 'hhh';
        $data = $request->validated();
        $role = Role::create([
            'name' => $request->role,
            'guard_name' => 'api'
        ])->givePermissionTo($request->permissions);

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        return response()->json(
            [
                'message' => 'Role created successfully',
                'data' => $role
            ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
