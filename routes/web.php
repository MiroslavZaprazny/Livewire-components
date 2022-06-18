<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;

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

Route::get('/', function () {
    return view('contact');
});

Route::get('/search', function(){
    return view('search');
});

Route::get('/data-table', function(){
    return view('table');
});

Route::get('/posts', [PostController::class,'index']);
Route::get('/posts/{post:id}', [PostController::class,'view']);
Route::post('/comment', [PostController::class,'store']);