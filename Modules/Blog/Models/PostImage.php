<?php

namespace Modules\Blog\Http\Models;

use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{
    protected $table = 'post_images';
    protected $fillable = ['path', 'fk_post'];

    public function post(){
        return $this->belongsTo(Post::class, 'id', 'fk_post');
    }
}
