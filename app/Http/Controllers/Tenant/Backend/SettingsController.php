<?php

namespace App\Http\Controllers\Tenant\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class SettingsController extends Controller
{
    public function logout(){
        Auth::logout();
        return Redirect::route('login');
    }

    public function view(){
        return Inertia::render('Tenant/Website/Backend/Settings');
    }


}
