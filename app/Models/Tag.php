<?php
namespace App\Models;

use App\Models\BooleanOption;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    protected $fillable = ['name', 'tag', 'fk_status'];

    public function status(){
        return $this->hasOne(BooleanStatus::class, 'id', 'fk_status');
    }
}
