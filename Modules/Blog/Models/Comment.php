<?php

namespace Modules\Blog\Http\Models;

use App\Models\BooleanOption;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['message', 'author', 'email', 'fk_post', 'fk_approved'];

    public function post(){
        return $this->belongsTo(Post::class, 'id', 'fk_post');
    }

    public function approved(){
        return $this->hasOne(BooleanOption::class, 'id', 'fk_approved');
    }
}
