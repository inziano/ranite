<?php namespace Ranite\Chauffeur\Models;

use Model;

/**
 * Model
 */
class Vehicle extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ranite_chauffeur_vehicle';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
