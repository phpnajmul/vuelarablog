<?php

declare(strict_types=1);

use App\Http\Controllers\Tenant\Backend\SettingsController;
use App\Http\Controllers\Tenant\Frontend\FrontendController;
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


    //Frontend routes start
    Route::get('/', [FrontendController::class, 'index'])->name('/');
    //Frontend routes end


    Route::get('/dashboard', function () {
        return Inertia::render('Tenant/Website/Backend/Dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('logout', [SettingsController::class,'logout'])->name('logout');

    //get settings data on axios
    Route::get('getData', [SettingsController::class,'getData']);
    //get settings data on axios

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    // Settings all routes Start
    Route::prefix('settings')->group(function (){
        Route::get('all', [SettingsController::class, 'allSettings'])->name('all.settings');
        Route::post('all/store', [SettingsController::class, 'storeAllSettings'])->name('all.setting.store');
        Route::get('all/edit', [SettingsController::class, 'editAllSettings'])->name('all.setting.edit');
        Route::post('all/update/{id}', [SettingsController::class, 'updateAllSettings'])->name('all.setting.update');
    });
    // Settings all routes End








    require __DIR__.'/tenant_auth.php';
});
