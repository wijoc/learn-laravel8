<?php

use App\Models\ArticleModel;
use App\Models\CategoryModel;
use App\Models\User;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
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

Route::get('/blog', [ArticleController::class, 'index']);

Route::get('/posts/{selected_post:a_slug}', [ArticleController::class, 'detailArticle']);

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/category/{selected_ctgr:c_slug}', [CategoryController::class, 'categoryArticles']);

Route::get('/author/{selected_author:username}', function(User $selected_author){
    return view('content.author_articles', [
        'title' => 'Author Post',
        'articlesData' => $selected_author->articles,
        'selectedAuthor' => $selected_author->name
    ]);
});

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