<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Categories extends Model
{
    use Notifiable;

    protected $table = 'categories',
        $fillable = ['title','description','active','author_id'];

    public function topics(){
        return $this->hasMany(Topics::class,'category_id','id');
    }

    public function comments(){
        return $this->hasMany(Comments::class,'category_id','id');
    }

    public function activeTopics(){
        return $this->topics()->where('active',1);
    }

}
