<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Categories;

class CategoriesController extends Controller
{

    public function index(){

        return view('frontend.categories.index',[
            'title'=>__('messages.frontend.categories.list.title'),
            'categories'=>Categories::all()->where('active',1),
        ]);
    }

    public function view($lang,$id){
        $category = Categories::findOrFail($id);
        return view('frontend.topics.index',[
            'title'=>__('messages.frontend.categories.view.title',['title'=>$category->title]),
            'category'=>$category,
            'topics'=>$category->activeTopics,
        ]);
    }

}
