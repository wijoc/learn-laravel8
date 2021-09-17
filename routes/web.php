<?php

use App\Models\Article_m;
use App\Http\Controllers\Article_c;
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

Route::get('/blog', [Article_c::class, 'index']);

Route::get('/posts/{slug}', [Article_c::class, 'detailArticle']);