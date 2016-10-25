<?php namespace TopSportsTv\Subscriptions\Models;

use Model;

/**
 * Model
 */
class Subscription extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'topsportstv_subscriptions_';

    public $hasMany = [
        'pagos' => [
            'TopSportsTv\Subscriptions\Models\Pago',
            'table' => 'topsportstv_subscriptions_pagos'
        ]
    ];
}