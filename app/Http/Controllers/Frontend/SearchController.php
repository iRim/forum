<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontend\Topics;
use App\Models\Frontend\Comments;

class SearchController extends Controller
{

    public function index(Request $request,$lang){
        $search = $request->post('search');

        $result = [];
        $topics = Topics::where('active','=',1)
            ->where(function($query) use ($search){
                $query
                    ->where('title', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%');
            });
        $comments = Comments::where('message', 'like', '%' . $search . '%');

        return view('frontend.search.index',[
            'title'=>__('messages.frontend.search.params',['params'=>$search]),
            'topics'=>$topics,
            'comments'=>$comments
        ]);
    }

}
