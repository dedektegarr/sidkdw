<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, "index"])->name("dashboard.index");
Route::get('/dashboard', [DashboardController::class, "index"])->name("dashboard.index");
Route::prefix("data-master")->group(function () {
    Route::get("jenis-cb", [JenisController::class, "index"])->name("jenis.index");
    Route::post("jenis-cb", [JenisController::class, "store"])->name("jenis.store");
    Route::patch("jenis-cb/{jenis}/update", [JenisController::class, "update"])->name("jenis.update");
    Route::delete("jenis-cb/{jenis}/destroy", [JenisController::class, "destroy"])->name("jenis.destroy");
});
