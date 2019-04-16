<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{

    public function index(){
        // dd(request()->getLocale());
        return view('frontend.categories.index',[
            'title'=>__('Перелік категорій'),
            'categories'=>[]
        ]);
    }

}
