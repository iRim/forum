<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Frontend\Categories;

class CategoriesController extends Controller
{

    public function __construct()
    {
        // $this->middleware(['web']);
    }

    public function index(Request $request){

        if(!Categories::count()){
            $cat = new Categories();
            $cat->author_id = $request->user()->id;
            // $cat->category_id = 0;
            $cat->title = 'TEst';
            $cat->description = 'test';
            $cat->save();
        }

        return view('backend.categories.index',[
            'title'=>'Categories List',
            'categories'=>Categories::all()
        ]);
    }

    public function edit($id){
        dd($id);
    }

}
