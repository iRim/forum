<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function index(){
        return view('frontend.categories.index',[
            'title'=>'All categories',
            'categories'=>[]
        ]);
    }

}
