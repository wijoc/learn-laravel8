<?php

namespace App\Http\Controllers;
use App\Models\ArticleModel;

use Illuminate\Http\Request;

class ArticleController extends Controller{
    public function index(){
        /** Pass data to view */

        /** 1. Array */
        return view('content.blog', [
            'title'     => 'Blog',
            // 'blogPost'  => ArticleModel::all() // All row-data sort by id ASC
            'blogPost'  => ArticleModel::latest()->get() // All row-data sort by created_at DESC
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
        return view('content.post', [
            'title'         => 'Post',
            'selectedPost'  => $selected_post
        ]);
    }
}
