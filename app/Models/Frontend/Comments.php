<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\User;

class Comments extends Model
{
    use Notifiable;

    protected $table = 'comments',
        $fillable = ['message','author_id','topic_id','created_at'];

    public function category(){
        return $this->hasOne(Categories::class,'id','category_id');
    }

    public function topic(){
        return $this->hasOne(Topics::class,'id','topic_id');
    }

    public function user(){
        return $this->hasOne(User::class,'id','author_id');
    }

}
