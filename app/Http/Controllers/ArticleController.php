<?php

namespace App\Http\Controllers;
use App\Models\ArticleModel;
use App\Models\CategoryModel;
use App\Models\User;

use Illuminate\Http\Request;

class ArticleController extends Controller{
    public function index(){
        /** Set tirle */
        $page_title = '';
        if(request('getCategory')){
            $category = CategoryModel::firstWhere('c_slug', request('getCategory'));
            $page_title .= ' in ' . $category->c_name;
        }

        if(request('getAuthor')){
            $author = User::firstWhere('username', request('getAuthor'));
            $page_title .= ' By ' . $author->name;
        }

        /** Pass data to view */
            /** 1. Array */
            return view('content.articles', [
                'nav'   => 'BP',
                'tab_title'    => 'XA | Blog',
                'page_title'   => 'All Articles ' . $page_title,
                // 'blogPost'  => ArticleModel::all() // All row-data sort by id ASC
                // 'articlesData' => ArticleModel::latest()->get() // All row-data sort by created_at DESC
                // 'articlesData' => ArticleModel::with(['author', 'category'])->latest()->get() // Using Eager loading
                // 'articlesData' => ArticleModel::latest()->get() // Using Eager loading, but with() is on the model

                /** Search, category and author, filter() is our localscope */
                // 'articlesData' => ArticleModel::latest()->filter(request(['getSearch', 'getCategory', 'getAuthor']))->get()

                /** Using pagination default is tailwind, and load paginator lib, 
                 * change provider to bootstrap theme with Paginator::useBootstrap() in App\Providers\AppServiceProvider -> function boot 
                 * withQueryString() to bring every query that already exist, in this case getSearch / getCategory / getAuthor
                 * */
                'articlesData' => ArticleModel::latest()->filter(request(['getSearch', 'getCategory', 'getAuthor']))->paginate(7)->withQueryString()
            ]);

            /** 2. using compact */
            // $title    = 'title';
            // $blogPost = 'blog post';
            // return view('content.blog', compact('title', 'blogPost'));

            /** 3. using with */
            // $title    = 'title';
            // $blogPost = 'blog post';
            // return view('content.blog')->with('title', $title);

    }

    public function detailArticle(ArticleModel $selected_post){
        return view('content.article', [
            'nav'   => 'DAP',
            'tab_title'    => 'XA | '.$selected_post->a_title,
            'selectedArticle'  => $selected_post
        ]);
    }
}
