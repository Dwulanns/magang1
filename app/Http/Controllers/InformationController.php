<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function information()
    {   
        $information = Information::all();
        $hero = Banner::where('category', 3)->first();
        $footer = Information::all();
        $logo = Banner::where('category', 1)->get()->first();
        $apiwa = Information::all();
        return view('home.contact', compact('footer','information', 'logo', 'hero','apiwa')); 
}

    public function footer(){
        $footer = Information::all();
        return view('home.footer', compact('footer')); 
    }
    public function apiwa(){
        $apiwa = Information::all();
        return view('home.apiwa', compact('apiwa')); 
    }
}