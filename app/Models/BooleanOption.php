<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BooleanOption extends Model
{
    const KEY_YES = 1;
    const KEY_NO = 2;

    protected $table = 'boolean_options';
}
