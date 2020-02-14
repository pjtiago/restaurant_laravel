<?php

namespace Modules\Restaurant\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'start_date'];
}
