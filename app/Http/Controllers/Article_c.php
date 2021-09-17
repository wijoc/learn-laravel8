<?php

namespace App\Http\Controllers;
use App\Models\Article_m;

use Illuminate\Http\Request;

class Article_c extends Controller{
    public function index(){
        return view('content.blog', [
            'title'     => 'Blog',
            'blogPost'  => Article_m::allArticle()
        ]);
    }

    public function detailArticle($slug){
        return view('content.post', [
            'title'         => 'Post',
            'selectedPost'  => Article_m::getArticle($slug)
        ]);
    }
}
