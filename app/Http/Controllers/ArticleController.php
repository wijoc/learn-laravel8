<?php

namespace App\Http\Controllers;
use App\Models\ArticleModel;

use Illuminate\Http\Request;

class ArticleController extends Controller{
    public function index(){
        /** Pass data to view */

        /** 1. Array */
        return view('content.articles', [
            'nav'   => 'BP',
            'tab_title'    => 'XA | Blog',
            'page_title'   => 'Articles',
            // 'blogPost'  => ArticleModel::all() // All row-data sort by id ASC
            // 'articlesData' => ArticleModel::latest()->get() // All row-data sort by created_at DESC
            // 'articlesData' => ArticleModel::with(['author', 'category'])->latest()->get() // Using Eager loading
            'articlesData' => ArticleModel::latest()->get() // Using Eager loading, but with() is on the model
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
