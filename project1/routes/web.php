<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\serviceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//    // return view('welcome');
// });



Route::get('/', function () {
    return view('home');
});

 Route::get('/about', function () {
   return view('about');
});

 //Route::get('about',[aboutController::class, 'show']);

 //Route::get('service',[serviceController::class, 'show']);

   Route::get('/service', function () {
          return view('service');
   });

Route::get('/service', 'serviceController@show');
Route::post('/service', 'serviceController@store');


Route::get('/gallary', function () {
    return view('gallary');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/pages', function () {
    return view('pages');
});

Route::get('/blog', function () {
    return view('blog');
});

