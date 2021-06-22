<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin.setting.setting')->with('settings', Setting::first());
    }

    public function update()
    {
        $this->validate(request(), [
            'site_name' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'address' => 'required'
        ]);

        $settings = Setting::first();

        $settings->site_name = request()->site_name;
        $settings->contact = request()->contact;
        $settings->email = request()->email;
        $settings->address = request()->address;

        $settings->save();

        Session::flash('success', 'Settings Updated');

        return redirect()->back();

    }
}
