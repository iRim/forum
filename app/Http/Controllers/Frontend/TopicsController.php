<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Frontend\Topics;

class TopicsController extends Controller
{

    public function create($lang,$category_id){
        return view('frontend.topics.create',[
            'title'=>__('messages.frontend.topics.create.title'),
            'model'=>new Topics()
        ]);
    }

    public function postCreate(Request $request,$lang,$category_id){
        $topic = Topics::firstOrNew($request->except('_token'));
        $topic->author_id = \Auth::id();
        $topic->category_id = $category_id;
        $topic->created_at = $topic->updated_at = now();
        if($topic->save()){
            return redirect()->route('frontend.categories.view',['category_id'=>$category_id]);
        }
        return redirect()->back();
    }

}
