<?php

namespace App\Http\Controllers;
use \App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller{
    public function userArticles(User $selected_author){
        return view('content.articles', [
            'nav'   => 'BP',
            'tab_title'     => 'XA | Articles by Author',
            'page_title'    => 'Article by Author : '.$selected_author->name,
            'articlesData'  => $selected_author->articles->load('category', 'author'), // Using Lazy Eager Loading
        ]);
    }
}
