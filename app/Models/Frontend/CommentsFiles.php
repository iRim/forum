<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class CommentsFiles extends Model
{

    use Notifiable;

    protected $table = 'comments_files',
        $fillable = ['topic_id','comment_id','user_id','file'];
    public $timestamps = false;

}
