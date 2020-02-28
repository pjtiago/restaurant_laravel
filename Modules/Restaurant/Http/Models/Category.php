<?php

namespace Modules\Restaurant\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'description', 'fk_visible'];

    public function visible(){
        return $this->hasOne(BooleanOption::class, 'id', 'fk_visible');
    }

    public function products(){
        return $this->hasMany(Product::class, 'fk_category_id', 'id');
    }
}
