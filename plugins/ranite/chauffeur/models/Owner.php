<?php namespace Ranite\Chauffeur\Models;

use Model;

/**
 * Model
 */
class Owner extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ranite_chauffeur_vehicle_owner';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
