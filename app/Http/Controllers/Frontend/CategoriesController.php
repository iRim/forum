<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{

    public function index(){

        return view('frontend.categories.index',[
            'title'=>__('messages.frontend.categories.list.title'),
            'categories'=>[]
        ]);
    }

}
