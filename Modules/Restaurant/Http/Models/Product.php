<?php

namespace Modules\Restaurant\Http\Models;

use App\Models\BooleanOption;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'photo',
        'fk_category_id',
        'fk_visible',
        'fk_highlight'
    ];

    public function getPhotoNameAttribute():string
    {
        $filePathArray = explode("/", $this->photo);
        $fileIndex = count($filePathArray) - 1;

        return $filePathArray[$fileIndex] ?? '';
    }

    public function visible(){
        return $this->hasOne(BooleanOption::class, 'id', 'fk_visible');
    }

    public function highlight(){
        return $this->hasOne(BooleanOption::class, 'id', 'fk_highlight');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'fk_category_id', 'id');
    }
}
