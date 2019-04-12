<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Categories extends Model
{
    use Notifiable;

    protected $table = 'categories',
        $fillable = ['title','description','active','author_id'];

}
