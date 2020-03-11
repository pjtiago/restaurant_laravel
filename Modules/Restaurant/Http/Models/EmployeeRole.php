<?php

namespace Modules\Restaurant\Http\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeRole extends Model
{
    protected $table = 'employees_roles';
    protected $fillable = [
        'name',
        'order'
    ];

    public function employees(){
        return $this->hasMany(Employee::class, 'fk_role', 'id');
    }
}
