<?php

namespace App\Http\Controllers;
use App\Models\CategoryModel;

use Illuminate\Http\Request;

class CategoryController extends Controller{
    public function index(){
        return view('content.categories', [
            'nav'   => 'CP',
            'tab_title' => 'XA | Articles in Category',
            'ctgrData'  => CategoryModel::all()
        ]);
    }

    public function categoryArticles(CategoryModel $selected_ctgr){
        return view('content.articles', [
            'nav'   => 'CP',
            'tab_title'     => 'XA | Articles in Category',
            'page_title'    => 'Articles in Category : '.$selected_ctgr->c_name,
            'articlesData'  => $selected_ctgr->articles->load('category', 'author'), // Using Lazy Eager Loading
        ]);
    }
}
