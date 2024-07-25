<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Information;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service()
    {
        $service = Service::all(); // Mengambil semua data dari model Service
        // dd($service);die;
        $hero = Banner::where('category', 3)->first();
        $footer = Information::all();
        $logo = Banner::where('category', 1)->first();
        $apiwa = Information::all();
        return view('home.services', compact('service', 'logo','footer', 'hero','apiwa')); // Mengirimkan data ke view

    }
}
