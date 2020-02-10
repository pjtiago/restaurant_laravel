<?php

namespace Modules\Restaurant\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $fillable = ['name', 'n_sits'];
}
