<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Frontend\Topics;
use Illuminate\Contracts\Auth\Guard;
use App\Models\Frontend\Categories;

class TopicsController extends Controller
{

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('auth', ['only' => ['create', 'postCreate']]);
    }


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
            $topic->category->updated_at = now();
            $topic->category->save();
            return redirect()->route('frontend.categories.view',['category_id'=>$category_id])->with('messages',[
                [
                    'type'=>'success',
                    'message'=>__('messages.frontend.alerts.create.topic')
                ]
            ]);
        }
        return redirect()->back();
    }

    public function view(Request $request,$lang,$category_id,$topic_id){
        $topic = Topics::findOrFail($topic_id);
        return view('frontend.topics.view',[
            'title'=>__('messages.frontend.topics.view.title',[
                'title'=>$topic->title
            ]),
            'topic'=>$topic,
            'comments'=>$topic->comments
        ]);
    }

}
