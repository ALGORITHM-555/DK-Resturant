<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homePageSettingsController extends Controller
{
    public function index(){
        return view('home_page_settings');
    }
    public function settings(){
        return view('settings');
    }
}
