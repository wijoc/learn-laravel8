<?php

namespace App\Http\Controllers;
use App\Models\Article_m;

use Illuminate\Http\Request;

class Article_c extends Controller{
    public function index(){
        return view('content.blog', [
            'title'     => 'Blog',
            'blogPost'  => Article_m::all()
        ]);
    }

    public function detailArticle(Article_m $selected_post){
        return view('content.post', [
            'title'         => 'Post',
            'selectedPost'  => $selected_post
        ]);
    }
}
