<?php

namespace App\Http\Controllers\Tenant\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontendController extends Controller
{

    public function index(){

        return Inertia::render('Tenant/Website/Frontend/Welcome', [
            'allData' => Settings::all()
        ] );
    }


}
