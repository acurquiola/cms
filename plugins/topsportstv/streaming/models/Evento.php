<?php namespace Topsportstv\Streaming\Models;

use Model;

/**
 * Model
 */
class Evento extends Model
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
    public $table = 'topsportstv_streaming_eventos';


    public $belongsTo = [
        'deportes' => [
            'Topsportstv\Streaming\Models\Deporte',
            'table' => 'topsportstv_streaming_deportes',
        ]
    ];
}