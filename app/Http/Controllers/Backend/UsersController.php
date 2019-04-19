<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    public function index(Request $request){
        return view('backend.users.index',[
            'title'=>__('messages.backend.users.list.title'),
            'users'=>User::all(),
        ]);
    }

    public function edit($lang,$id){
        $user = User::findOrFail($id);
        return view('backend.users.edit',[
            'title'=>'Edit user #'.$user->id,
            'model'=>$user
        ]);
    }

    public function postEdit($lang,$id,Request $request){
        $user = User::findOrFail($id);
        if($user->update($request->except('_token'))){
            return redirect()->route('backend.users.list');
        }
        return redirect()->back();
    }

    public function create(){
        return view('backend.users.create',[
            'title'=>__('messages.backend.users.create.title'),
            'model'=>new User()
        ]);
    }

    public function postCreate(Request $request){
        $user = User::firstOrNew($request->except('_token'));
        $user->password = Hash::make(md5($request->first_name.$request->last_name.$request->email.microtime()));
        if($user->save()){
            return redirect()->route('backend.users.list');
        }
        return redirect()->back();
    }


    public function delete(Request $request,$lang,$id){
        $messages = [];
        $user = User::findOrFail($id);
        if($user->delete()){
            $messages[] = [
                'type'=>'success',
                'message'=>'User #'.$user->id.' ('.$user->email.') deleted!'
            ];
        }
        else{
            $messages[] = [
                'type'=>'danger',
                'message'=>'User #'.$user->id.' ('.$user->email.') NOT deleted!'
            ];
        }
        return redirect()->route('backend.users.list')->with('messages',$messages);
    }

}
