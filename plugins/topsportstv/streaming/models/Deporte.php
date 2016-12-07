<?php namespace Topsportstv\Streaming\Models;

use Model;

/**
 * Model
 */
class Deporte extends Model
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
    public $table = 'topsportstv_streaming_deportes';


    public $hasMany = [
        'eventos' => [
            'TopSportsTv\Streaming\Models\Evento',
            'table' => 'topsportstv_streaming_eventos'
        ]
    ];
}