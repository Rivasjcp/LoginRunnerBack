<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckAdminRole;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;

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

Route::middleware(['auth:sanctum', CheckAdminRole::class])->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/photos', [PhotoController::class, 'index']);
    // Otras rutas protegidas para administradores aquí

});

Route::get("/users", [UserController::class, "index"]);
Route::get("/users-index", [UserController::class, "indexUsers"]);
Route::post("/store", [UserController::class, "store"]);
Route::post("/login", [AuthController::class, "login"]);
Route::get("/users/{user}", [UserController::class, "show"]);
Route::put("/users/{user}", [UserController::class, "update"]);
Route::put("/users/{user}", [UserController::class, "updateRole"]);
Route::delete("/users/{user}", [UserController::class, "delete"]);


Route::post('/photo', [PhotoController::class, 'store'])->middleware('auth:sanctum');




