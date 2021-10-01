<?php

use App\Models\Article_m;
use App\Models\Category_m;
use App\Http\Controllers\Article_c;
use App\Http\Controllers\Category_c;
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

Route::get('/posts/{selected_post:a_slug}', [Article_c::class, 'detailArticle']);

Route::get('/categories', [Category_c::class, 'index']);

Route::get('/category/{selected_ctgr:c_slug}', [Category_c::class, 'categoryArticles']);

/** How to call controller */
    /** Laravel 8 */
    //Route::get('/blog', [controller-name::class, 'function-name']);
    //Route::get('/blog', 'App\Http\Controllers\[controller-name]@[function-name]');

    /** Before Laravel 8 */
    //Route::get('/blog', '[contoller-name]@[function-name]')

/** Type to return */
    /** A. View */
        // Route::get('/blog', function (){
        //     return view('welcome');
        // });

    /** B. String */
        // Route::get('/blog', function (){
        //     return 'return string';
        // });

    /** C. Array and JSON */
        // Route::get('/blog', function (){
        //     return ['val1', 'val2'];
        // });

        // Route::get('/blog', function (){
            // return response()->json([
            //     '0' => 'val1',
            //     '1' => 'val2'
            // ]);
        // });

    /** D. Function */
        // Route::get('/blog', function (){
        //     return reidreect('/');
        // });