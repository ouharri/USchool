<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\super_admin\PermissionController;
use App\Http\Controllers\super_admin\RoleController;
use App\Http\Controllers\super_admin\UserController;
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
    'middleware' => ['api', 'auth','role:SUPER_ADMIN'],
    'prefix' => 'super_admin'
], static function ($router) {

    Route::group([], static function ($router) {
        Route::apiResource('roles', RoleController::class);
        Route::group([
            'prefix' => 'roles'
        ], static function ($router) {
            Route::post('/{role}/permissions', [RoleController::class, 'givePermission']);
            Route::delete('/{role}/permissions/{permission}', [RoleController::class, 'revokePermission']);
        });
    });

    Route::group([], static function ($router) {
        Route::apiResource('/permissions', PermissionController::class);
        Route::group([
            'prefix' => 'permissions'
        ], static function ($router) {
            Route::post('/{permission}/roles', [PermissionController::class, 'assignRole']);
            Route::delete('/{permission}/roles/{role}', [PermissionController::class, 'removeRole']);
        });
    });

    Route::group([
        'prefix' => 'users'
    ], static function ($router) {
        Route::get('/', [UserController::class, 'index']);
        Route::get('/{user}', [UserController::class, 'show']);
        Route::delete('/{user}', [UserController::class, 'destroy']);
        Route::post('/{user}/roles', [UserController::class, 'assignRole']);
        Route::delete('/{user}/roles/{role}', [UserController::class, 'removeRole']);
        Route::post('/{user}/permissions', [UserController::class, 'givePermission']);
        Route::delete('/{user}/permissions/{permission}', [UserController::class, 'revokePermission']);
    });
});
