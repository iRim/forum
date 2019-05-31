<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Categories;
use App\Jobs\AddNewComments;

class CategoriesController extends Controller
{

    public function index(){
        $this->createJob();

        return view('frontend.categories.index',[
            'title'=>__('messages.frontend.categories.list.title'),
            'categories'=>Categories::all()->where('active',1),
        ]);
    }

    public function view($lang,$category_id){
        $category = Categories::findOrFail($category_id);
        return view('frontend.topics.index',[
            'title'=>__('messages.frontend.categories.view.title',['title'=>$category->title]),
            'category'=>$category,
            'topics'=>$category->activeTopics->sortByDesc('updated_at')
        ]);
    }

    private function createJob(){
        $job = (new AddNewComments());//->onQueue('high');
        dispatch($job);
    }

}
