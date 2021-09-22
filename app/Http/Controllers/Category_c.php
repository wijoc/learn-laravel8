<?php

namespace App\Http\Controllers;
use App\Models\Category_m;

use Illuminate\Http\Request;

class Category_c extends Controller{
    public function index(){
        return view('content.categories', [
            'title'     => 'Category',
            'ctgrData'  => Category_m::all()
        ]);
    }

    public function categoryArticles(Category_m $selected_ctgr){
        return view('content.categoris_articles', [
            'title'         => $selected_ctgr->c_name,
            'articlesData'  => $selected_ctgr->article_m,
            'selectedCtgr'  => $selected_ctgr->c_name
        ]);
    }
}
