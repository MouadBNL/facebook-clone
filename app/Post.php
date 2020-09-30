<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['body', 'type'];
    /**
     * 
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function originalPost()
    {
        return $this->hasOne(Post::class, 'id', 'original_post_id');
    }
}
