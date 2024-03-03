<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDomainRequest;
use App\Models\Tenant;
use Inertia\Inertia;

class TenancyRegisterController extends Controller
{
    public function create(){
        return Inertia::render('Create_Domain', ['domain' => config('tenancy.central_domains')[2]]);
    }

    public function store(StoreDomainRequest $request){

        //dd($request->all());
        $tenant = Tenant::create($request->validated());
//        dd($request->all());
        $tenant->createDomain(['domain' => $request->domain]);

        //dd($tenant);

        return redirect()->route('dashboard');
    }





}
