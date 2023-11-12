<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\AgamaController;

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

Route::get("/", [BerandaController::class, "index"]);

// Agama
Route::get("/agama", [AgamaController::class, "index"]);
Route::get("/agama/add", [AgamaController::class, "add"]);
Route::post("/agama/create", [AgamaController::class, "simpan"]);
Route::get("/agama/delete/{id}", [AgamaController::class, "hapus"]);

