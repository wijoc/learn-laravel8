<?php

namespace App\Http\Controllers;
use App\Models\CategoryModel;

use Illuminate\Http\Request;

class CategoryController extends Controller{
    public function index(){
        return view('content.categories', [
            'title'     => 'Category',
            'ctgrData'  => CategoryModel::all()
        ]);
    }

    public function categoryArticles(CategoryModel $selected_ctgr){
        return view('content.categoris_articles', [
            'title'         => $selected_ctgr->c_name,
            'articlesData'  => $selected_ctgr->articles,
            'selectedCtgr'  => $selected_ctgr->c_name
        ]);
    }
}
