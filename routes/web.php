<?php

use App\Models\Article_m;
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

Route::get('/', function () {
    return view('content.home', [
        'title' => 'Home',
    ]);
});

Route::get('/about', function () {
    return view('content.about', [
        'title' => 'About',
        'name'  => 'Point Brake',
        'mail'  => 'point@break.id',
    ]);
});

Route::get('/blog', function () {    
    return view('content.blog', [
        'title'     => 'Blog',
        'blogPost'  => Article_m::allArticle()
    ]);
});

Route::get('/posts/{slug}', function($slug) {
    return view('content.post', [
        'title'         => 'Post',
        'selectedPost'  => Article_m::getArticle($slug)
    ]);
});