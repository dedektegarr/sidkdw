<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\StatusController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, "index"])->name("dashboard.index");
Route::get('/dashboard', [DashboardController::class, "index"])->name("dashboard.index");
Route::prefix("data-master")->group(function () {
    Route::get("jenis-cb", [JenisController::class, "index"])->name("jenis.index");
    Route::post("jenis-cb", [JenisController::class, "store"])->name("jenis.store");
    Route::patch("jenis-cb/{jenis}/update", [JenisController::class, "update"])->name("jenis.update");
    Route::delete("jenis-cb/{jenis}/destroy", [JenisController::class, "destroy"])->name("jenis.destroy");

    Route::get("status-cb", [StatusController::class, "index"])->name("status.index");
    Route::post("status-cb", [StatusController::class, "store"])->name("status.store");
    Route::patch("status-cb/{status}/update", [StatusController::class, "update"])->name("status.update");
    Route::delete("status-cb/{status}/destroy", [StatusController::class, "destroy"])->name("status.destroy");

    Route::get("domain", [DomainController::class, "index"])->name("domain.index");
    Route::post("domain", [DomainController::class, "store"])->name("domain.store");
    Route::patch("domain/{domain}/update", [DomainController::class, "update"])->name("domain.update");
    Route::delete("domain/{domain}/destroy", [DomainController::class, "destroy"])->name("domain.destroy");
});
