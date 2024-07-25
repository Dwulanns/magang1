<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Information;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        $blog = Blog::all();
        // $categories = Blog::findOrFail($id);
        $apiwa = Information::all();
        $footer = Information::all();
        $hero = Banner::where('category', 3)->first();
        $logo = Banner::where('category', 1)->first();
        return view('home.blog', compact('blog',  'apiwa','footer','logo','hero')); 
    }

    // public function detaiblog($id){
    //     $detail = Blog::with('blog');
    //     ->where('id', $id);
    //     ->where('category');
    //     return view('home.detailblog', compact('detailblog')); 
    // }
    

}
