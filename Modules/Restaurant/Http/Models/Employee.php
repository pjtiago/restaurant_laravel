<?php

namespace Modules\Restaurant\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'description',
        'phone',
        'email',
        'birthday',
        'linkdin',
        'twitter',
        'facebook',
        'instagram',
        'photo',
        'fk_visible',
        'fk_role'
    ];

    public function visible(){
        return $this->hasOne(BooleanOption::class, 'id', 'fk_visible');
    }

    public function role(){
        return $this->hasOne(EmployeeRole::class, 'id', 'fk_role');
    }

}
