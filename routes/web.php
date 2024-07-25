<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/blog', [PostController::class, 'post']);
// Route::get('/detailblog', [PostController::class, 'detailblog']);

Route::get('/', [BannerController::class, 'home']);
Route::get('/hero', [BannerController::class, 'hero']);
Route::get('/about', [BannerController::class, 'about']);
Route::get('/contact',[InformationController::class, 'information']);
Route::get('/detailclient/{id}',[ClientController::class, 'detailclient'])->name('detail.client');;
Route::get('/footer',[InformationController::class, 'footer']);
Route::get('/services',[ServiceController::class, 'service']);
Route::get('/software/{id}', [PortofolioController::class, 'software']);
Route::get('/video',[MediaController::class, 'mediavideo']);
Route::get('/foto',[MediaController::class, 'mediafoto']);
Route::get('/wa',[InformationController::class, 'apiwa']);
Route::get('/blog',[BlogController::class, 'blog']);

// Route::get('/blog', function () {
//     return view('home.blog');
// });
// Route::get('/video', function () {
//     return view('home.video');
// });
// Route::get('/foto', function () {
//     return view('home.foto');
// });
// Route::get('/ourclients', function () {
//     return view('home.ourclients');
// });


Route::get('/ourclients', [ClientController::class, 'ourclient'])->name('ourclients');
Route::get('/client', [ClientController::class, 'client']);

// Route::get('/ourclient', [ClientController::class, 'client']);
