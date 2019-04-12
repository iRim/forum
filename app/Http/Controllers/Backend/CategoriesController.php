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
        $model = Categories::findOrFail($id);
        return view('backend.categories.edit',[
            'title'=>'Edit category "'.$model->title.'"',
            'model'=>$model
        ]);
    }

    public function create(){
        return view('backend.categories.create',[
            'title'=>'Create category',
            'model'=>new Categories()
        ]);
    }

    public function postCreate(Request $request){
        $category = Categories::firstOrNew($request->except('_token'));
        $category->author_id = \Auth::id();
        if($category->save()){
            return redirect()->route('backend.categories.list');
        }
        return redirect()->back();
    }

    public function postEdit($id,Request $request){
        $category = Categories::findOrFail($id);
        if($category->update($request->except('_token'))){
            return redirect()->route('backend.categories.list');
        }
        return redirect()->back();
    }

    public function delete(Request $request){
        dd($request);
    }

}
