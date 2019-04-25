<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Frontend\Comments;
use Illuminate\Contracts\Auth\Guard;
use JsValidator;
use Image;

class CommentsController extends Controller
{

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('auth', ['only' => ['create', 'postCreate']]);
    }

    public function create(){
        $max_size = 1024*1024*10;
        $validator = JsValidator::make([
            'message'=>'required|min:20|max:50',
            'image'=>'required|image|max:'.$max_size
        ]);

        return view('frontend.comments.create',[
            'title'=>__('messages.frontend.comments.create.title'),
            'model'=>new Comments(),
        ])->with([
            'validator'=>$validator
        ]);
    }

    public function postCreate(Request $request,$lang,$category_id,$topic_id){
        Image::configure(array('driver' => 'imagick'));
        $filename = null;
        foreach($request->files AS $file){
            $filename = implode('.',[
                microtime(),
                $file->getClientOriginalName(),
            ]);
            $filetype = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
            $filename = md5($filename).'.'.$filetype;
            $i = Image::make($file);
            $i->save(public_path('upload').DIRECTORY_SEPARATOR.$filename);
        }

        $c = Comments::firstOrNew($request->except(['_token','image']));
        $c->author_id = \Auth::id();
        $c->category_id = $category_id;
        $c->topic_id = $topic_id;
        $c->created_at = $c->updated_at = now();
        if($c->save()){
            $c->category->updated_at = now();
            $c->category->save();

            if(!empty($filename)){
                // dd($filename);
                $c->files()->create([
                    'topic_id'=>$c->topic_id,
                    'comment_id'=>$c->id,
                    'user_id'=>$c->author_id,
                    'file'=>$filename
                ]);
            }


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
