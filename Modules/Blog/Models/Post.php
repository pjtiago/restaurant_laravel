<?php

namespace Modules\Blog\Http\Models;

use App\Models\BooleanOption;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['content', 'fk_user', 'fk_post_category', 'fk_highlight', 'fk_visible'];

    public function visible(){
        return $this->hasOne(BooleanOption::class, 'id', 'fk_visible');
    }

    public function highlight(){
        return $this->hasOne(BooleanOption::class, 'id', 'fk_highlight');
    }

    public function user(){
        return $this->belongsTo(User::class, 'id', 'fk_user');
    }

    public function postCategory(){
        return $this->belongsTo(PostCategory::class, 'fk_post_category', 'id');
    }
}
