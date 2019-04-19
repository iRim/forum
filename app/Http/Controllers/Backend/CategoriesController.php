<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Frontend\Categories;
use Illuminate\Support\Facades\Session;

class CategoriesController extends Controller
{

    public function index(Request $request){
        return view('backend.categories.index',[
            'title'=>__('messages.backend.categories.list.title'),
            'categories'=>Categories::all(),
        ]);
    }

    public function edit($lang,$id){
        $model = Categories::findOrFail($id);
        return view('backend.categories.edit',[
            'title'=>'Edit category "'.$model->title.'"',
            'model'=>$model
        ]);
    }

    public function create(){
        return view('backend.categories.create',[
            'title'=>__('messages.backend.categories.create.title'),
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

    public function postEdit($lang,$id,Request $request){
        $category = Categories::findOrFail($id);
        if($category->update($request->except('_token'))){
            return redirect()->route('backend.categories.list');
        }
        return redirect()->back();
    }

    public function delete(Request $request,$id){
        $messages = [];
        $model = Categories::findOrFail($id);
        if($model->delete()){
            $messages[] = [
                'type'=>'success',
                'message'=>__('Category ":title" deleted!',['title'=>$model->title])
            ];
        }
        else{
            $messages[] = [
                'type'=>'danger',
                'message'=>__('Category ":title" not deleted!',['title'=>$model->title])
            ];
        }
        return redirect()->route('backend.categories.list')->with('messages',$messages);
    }

}
