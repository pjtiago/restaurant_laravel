<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BooleanStatus extends Model
{
    const KEY_INACTIVE = 0;
    const KEY_ACTIVE = 1;

    protected $table = 'boolean_status';
}
