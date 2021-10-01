<?php

namespace App\Http\Controllers;
use App\Models\Article_m;

use Illuminate\Http\Request;

class Article_c extends Controller{
    public function index(){
        /** Pass data to view */

        /** 1. Array */
        return view('content.blog', [
            'title'     => 'Blog',
            'blogPost'  => Article_m::all()
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

    public function detailArticle(Article_m $selected_post){
        return view('content.post', [
            'title'         => 'Post',
            'selectedPost'  => $selected_post
        ]);
    }
}
