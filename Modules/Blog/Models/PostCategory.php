<?php

namespace Modules\Blog\Http\Models;

use App\Models\BooleanOption;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $table = 'post_categories';
    protected $fillable = ['name', 'fk_visible'];

    public function visible(){
        return $this->hasOne(BooleanOption::class, 'id', 'fk_visible');
    }

    public function posts(){
        return $this->hasMany(Post::class, 'fk_post_category', 'id');
    }
}
