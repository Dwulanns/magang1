<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Foto;
use App\Models\Information;
use App\Models\Video; // Corrected from 'vidio' to 'Video'
use Illuminate\Support\Facades\Vite;

class MediaController extends Controller
{
    public function mediavideo()
    {
        $mediavideo = Video::all();
        $hero = Banner::where('category', 3)->first();
        $footer = Information::all();
        $logo = Banner::where('category', 1)->first();
        $apiwa = Information::all();

        return view('home.video', compact('mediavideo', 'logo', 'footer', 'hero', 'apiwa')); // Corrected 'vidio' to 'videos' and 'vidio' view to 'video'
    }

    public function mediafoto()
    {
        $mediafoto = Foto::all();
        $hero = Banner::where('category', 3)->first();
        $footer = Information::all();
        $logo = Banner::where('category', 1)->first();
        $apiwa = Information::all();

        return view('home.foto', compact('mediafoto', 'logo', 'footer', 'hero', 'apiwa')); // Corrected 'vidio' to 'videos' and 'vidio' view to 'video'
    }
}
