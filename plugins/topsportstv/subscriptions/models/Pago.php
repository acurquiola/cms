<?php namespace TopSportsTv\Subscriptions\Models;

use Model;
use Carbon\Carbon;
use TopSportsTv\Subscriptions\Models\Subscription;
/**
 * Model
 */
class Pago extends Model
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
    public $table = 'topsportstv_subscriptions_pagos';



    public $belongsTo = [
        'users' => [
            'RainLab\User\Models\User',
            'table' => 'users', 
            'order' => 'email'
        ], 

        'subscriptions' => [
            'TopSportsTv\Subscriptions\Models\Subscription',
            'table' => 'topsportstv_subscriptions_'
        ]
    ];

    public function filterFields($fields, $context = null)
    {
        if($this->estado == 'confirmado') {
            $today = Carbon::now();
            $fields->fecha_inicio->value = $today->toDateString();
            
            $plan                        = $fields->subscriptions->value;
            $meses                       = Subscription::find($plan)->duracion_meses;
            $fields->fecha_fin->value    = $today->addMonth($meses)->toDateString();
        }
    }

    
}