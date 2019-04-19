<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\User;

class Topics extends Model
{
    use Notifiable;

    protected $table = 'topics',
        $fillable = ['title','description','category_id','active','author_id','created_at'];

    public function comments(){
        return $this->hasMany(Comments::class,'topic_id','id');
    }

    public function category(){
        return $this->hasOne(Categories::class,'id','category_id');
    }

    public function user(){
        return $this->hasOne(User::class,'id','author_id');
    }
}

