<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Frontend\Comments;
use Illuminate\Contracts\Auth\Guard;

class CommentsController extends Controller
{

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('auth', ['only' => ['create', 'postCreate']]);
    }

    public function create(){
        return view('frontend.comments.create',[
            'title'=>__('messages.frontend.comments.create.title',[]),
            'model'=>new Comments()
        ]);
    }

    public function postCreate(Request $request,$lang,$category_id,$topic_id){
        $c = Comments::firstOrNew($request->except('_token'));
        $c->author_id = \Auth::id();
        $c->category_id = $category_id;
        $c->topic_id = $topic_id;
        $c->created_at = $c->updated_at = now();
        if($c->save()){
            $c->category->updated_at = now();
            $c->category->save();
            return redirect()->route('frontend.topics.view',['category_id'=>$category_id,'topic_id'=>$topic_id])->with('messages',[
                [
                    'type'=>'success',
                    'message'=>__('messages.frontend.alerts.create.comment')
                ]
            ]);
        }
        return redirect()->back();
    }

}
