<?php

declare(strict_types=1);

use App\Http\Controllers\Tenant\Backend\SettingsController;
use App\Http\Controllers\Tenant\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('/', function () {
        return Inertia::render('Tenant/Website/Frontend/Welcome');
    });


    Route::get('/dashboard', function () {
        return Inertia::render('Tenant/Website/Backend/Dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('logout', [SettingsController::class,'logout'])->name('logout');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });







    require __DIR__.'/tenant_auth.php';
});
