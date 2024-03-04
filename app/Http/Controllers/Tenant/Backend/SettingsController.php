<?php

namespace App\Http\Controllers\Tenant\Backend;

use App\Http\Controllers\Controller;
use App\Models\Settings;
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

    public function allSettings(){
        //dd($setting);
        $settings = Settings::all();
        return Inertia::render('Tenant/Website/Backend/Settings', ['settings' => $settings]);
    }

    public function storeAllSettings(Request $request){

        //dd($request);
        //dd($request->toArray());

        $validated = $request->validate([
            'logo'              => 'nullable|image|mimes:jpeg,jpg,png,gif',
            'footer_logo'       => 'nullable|image|mimes:jpeg,jpg,png,gif',
            'image'             => 'nullable|image|mimes:jpeg,jpg,png,gif',
            'heading'           => 'max:35',
            'title'             => 'max:20',
            'cholak'            => 'max:50',
            'footer_logo_title' => 'max:20',
            'facebook'          => 'nullable|url',
            'twitter'           => 'nullable|url',
            'github'            => 'nullable|url',
            'dribble'           => 'nullable|url',
        ]);


        $data                    = new Settings();
        $data->heading           = $request->heading;
        $data->title             = $request->title;
        $data->cholak            = $request->cholak;
        $data->footer_logo_title = $request->footer_logo_title;
        $data->facebook          = $request->facebook;
        $data->twitter           = $request->twitter;
        $data->github            = $request->github;
        $data->dribble           = $request->dribble;

//        logo upload here
        if ($request->file('logo')) {
            $file     = $request->file('logo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/tenant/backend/settings'),$filename);
            $data['logo'] = $filename;
        }

        //footer logo upload here
        if ($request->file('footer_logo')) {
            $file     = $request->file('footer_logo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/tenant/backend/settings'),$filename);
            $data['footer_logo'] = $filename;
        }

        //display image upload here
        if ($request->file('image')) {
            $file     = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/tenant/backend/settings'),$filename);
            $data['image'] = $filename;
        }

        $data->added_by = Auth::id();
        $data->save();

        return Redirect::route('dashboard');

    }




}
