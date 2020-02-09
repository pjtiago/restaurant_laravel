<?php

namespace App\Models\Traits;

use Closure;

trait RegistersEvents
{
    /**
     * Boots BaseModel
     */
    public static function boot()
    {
        parent::boot();

        // actions before event occurs
        static::creating(static::creatingActions());
        static::updating(static::updatingActions());
        static::saving(static::savingActions());
        static::deleting(static::deletingActions());

        // actions after event occurs
        static::created(static::createdActions());
        static::updated(static::updatedActions());
        static::saved(static::savedActions());
        static::deleted(static::deletedActions());
    }

    /**
     * Returns a closure that define actions to execute right before model
     * creation occurs
     *
     * @return Closure
     */
    protected static function creatingActions()
    {
        return function ($model) {
            //
        };
    }

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

    /**
     * Returns a closure that define actions to execute right before model
     * saving occurs
     *
     * @return Closure
     */
    protected static function savingActions()
    {
        return function ($model) {
            //
        };
    }

    /**
     * Returns a closure that define actions to execute right before model
     * deletion occurs
     *
     * @return Closure
     */
    protected static function deletingActions()
    {
        return function ($model) {
            //
        };
    }

    /**
     * Returns a closure that define actions to execute right after model
     * creation occurs
     *
     * @return Closure
     */
    protected static function createdActions()
    {
        return function ($model) {
            //
        };
    }

    /**
     * Returns a closure that define actions to execute right after model
     * update occurs
     *
     * @return Closure
     */
    protected static function updatedActions()
    {
        return function ($model) {
            //
        };
    }

    /**
     * Returns a closure that define actions to execute right after model
     * saving occurs
     *
     * @return Closure
     */
    protected static function savedActions()
    {
        return function ($model) {

        };
    }

    /**
     * Returns a closure that define actions to execute right after model
     * deletion occurs
     *
     * @return Closure
     */
    protected static function deletedActions()
    {
        return function ($model) {

        };
    }
}
