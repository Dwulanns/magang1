<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Client;
use App\Models\Information;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    // public function detailclient($id){
    //     $detailclient = Client::with('portofolios')->get();
    //     $apiwa = Information::all();
    //     $footer = Information::all();
    //     $hero = Banner::where('category', 3)->first();
    //     $logo = Banner::where('category', 1)->first();
    
    //     return view('home.detailclient', compact('client','apiwa','footer','logo','hero')); 
    // }

    public function software (){
        $category = Client::all();
        // $detailclient = Client::with('portofolio')->where('id', $id)->first();
        $apiwa = Information::all();
        $footer = Information::all();
        $hero = Banner::where('category', 3)->first();
        $logo = Banner::where('category', 1)->first();
        return view('pages.detailclient', compact('category', 'detailclient','apiwa','footer','logo','hero')); 
    }
}
