<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\super_admin\PermissionController;
use App\Http\Controllers\super_admin\RoleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], static function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user', [AuthController::class, 'userProfile']);
});

Route::group([
    'middleware' => ['api', 'auth'],
], static function ($router) {
    Route::apiResource('roles', RoleController::class);
    Route::group([
        'prefix' => 'roles'
    ], static function ($router) {
        Route::post('/{role}/permissions', [RoleController::class, 'givePermission']);
        Route::delete('/{role}/permissions/{permission}', [RoleController::class, 'revokePermission']);
    });
});

Route::group([
    'middleware' => ['api', 'auth'],
], static function ($router) {
    Route::apiResource('/permissions', PermissionController::class);
    Route::group([
        'prefix' => 'permissions'
    ], static function ($router) {
        Route::post('/{permission}/roles', [PermissionController::class, 'assignRole']);
        Route::delete('/{permission}/roles/{role}', [PermissionController::class, 'removeRole']);
    });
});
