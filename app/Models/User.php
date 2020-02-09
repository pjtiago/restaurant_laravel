<?php

namespace App\Models;

use App\Models\Traits\RegistersEvents;
use Closure;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, RegistersEvents;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Returns a closure that define actions to execute right before model
     * update occurs
     *
     * @return Closure
     */
    protected static function updatingActions()
    {
        return function ($model) {
            //
        };
    }

    protected static function createdActions()
    {
        return function ($model) {
            $a = "boi";
        };
    }
}
