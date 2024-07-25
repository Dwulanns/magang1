<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Client;
use App\Models\Information;
use App\Models\Service;
use Illuminate\Http\Request;

class BannerController extends Controller
{
        public function logo()
    {
        $logo = Banner::where('category', 1)->first();
        return view('pages.header', compact('logo'));
    }
    public function home() {
        $apiwa = Information::all();
        $home = Banner::where('category', 2)->get(); 
        $client = Client::all(); 
        $footer = Information::all();
        $service = Service::all(); 
        $logo = Banner::where('category', 1)->first();
        $andro = Banner::where('category', 5)->first();

        return view('pages.home', compact('home', 'service', 'logo', 'footer', 'client','apiwa', 'andro')); 
    }

    
    // public function andro(){
    //     $andro = Banner::where('category', 5)->first();
    //     $desc = $andro ->description ?? ''; 
    //     $tittle = $andro ->title ?? ''; 
    //     return view('home.home', compact('andro','desc','title'));
    // }
    public function hero(){
        $hero = Banner::where('category', 3)->first();
        return view('pages.hero', compact('hero'));
    }

    

        public function about()
    {
        $logo = Banner::where('category', 1)->first();
        $hero = Banner::where('category', 3)->first();
        $about = Banner::where('category', 4)->first();
        $footer = Information::all();
        $service = Service::all();
        $apiwa = Information::all();
        $text = $about->description ?? ''; 
        $title = $about->title ?? ''; 

        return view('pages.about', compact('about', 'footer', 'service', 'logo', 'hero', 'apiwa', 'text', 'title'));
    }

    
}
