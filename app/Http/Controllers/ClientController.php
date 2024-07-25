<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Client;
use App\Models\Information;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function client(){
        $client = Client::all(); 
        // dd($client);die;
        return view('home.client', compact('client')); 
    }

    public function ourclient(){
        $ourclient = Client::all();
        // dd($ourclient);die;
        $apiwa = Information::all();
        $footer = Information::all();
        $hero = Banner::where('category', 3)->first();
        $logo = Banner::where('category', 1)->first();
    
        return view('home.ourclients', compact('ourclient','apiwa','footer','logo','hero')); 
    }
    
    public function detailclient($id){
        $category = Client::all();
        $detailclient = Client::with('portofolio')->where('id', $id)->first();
        $apiwa = Information::all();
        $footer = Information::all();
        $hero = Banner::where('category', 3)->first();
        $logo = Banner::where('category', 1)->first();

        return view('home.detailclient', compact( 'detailclient','apiwa','footer','logo','hero')); 
    }
   
    
}
