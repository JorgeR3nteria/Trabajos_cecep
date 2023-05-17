<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\NeighborhoodController;
use App\Http\Controllers\EpsController;
use Illuminate\Support\Facades\Route;

Route::group(["prefix" => "/api", "middleware" => ['cors']], function () {
    Route::get("roles", [RoleController::class, "index"]);
    Route::post("roles", [RoleController::class, "create"]);
    Route::delete("roles/{id}", [RoleController::class, "delete"]);
    Route::put("roles/{id}", [RoleController::class, "update"]);

    Route::get("countrys", [CountryController::class, "index"]);
    Route::post("countrys", [CountryController::class, "create"]);
    Route::delete("countrys/{id}", [CountryController::class, "delete"]);
    Route::put("countrys/{id}", [CountryController::class, "update"]);

    Route::get("cities", [CityController::class, "index"]);
    Route::post("cities", [CityController::class, "create"]);
    Route::delete("cities/{id}", [CityController::class, "delete"]);
    Route::put("cities/{id}", [CityController::class, "update"]);

    Route::get("neighborhoods", [NeighborhoodController::class, "index"]);
    Route::post("neighborhoods", [NeighborhoodController::class, "create"]);
    Route::delete("neighborhoods/{id}", [NeighborhoodController::class, "delete"]);
    Route::put("neighborhoods/{id}", [NeighborhoodController::class, "update"]);

    Route::get("eps", [EpsController::class, "index"]);
    Route::post("eps", [EpsController::class, "create"]);
    Route::delete("eps/{id}", [EpsController::class, "delete"]);
    Route::put("eps/{id}", [EpsController::class, "update"]);

    Route::get("users", [UserController::class, "index"]);
    Route::post("users", [UserController::class, "create"]);
    Route::delete("users/{id}", [UserController::class, "delete"]);
    Route::put("users/{id}", [UserController::class, "update"]);
});
