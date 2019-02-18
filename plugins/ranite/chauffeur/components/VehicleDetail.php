<?php 
namespace Ranite\Chauffeur\Components;

use Cms\Classes\ComponentBase;

use Ranite\Chauffeur\Models\Vehicle;

Class VehicleDetail extends ComponentBase 
{
    // All Vehicles
    public $singleVehicle;

    public function componentDetails () {
        return [
            'name' => 'Vehicle Detail',
            'description' => 'Details of single vehicle'
        ];
    }

    public function defineProperties () {
        return [
            'slug' => [
                'title'       => 'slug',
                'default'     => '{{ :slug }}',
                'type'        => 'string',
            ]
        ];
    }

    // Load all vehicles
    public function onRun () {
        // Pass vehicles to global vehicle variable
        $this->singleVehicle = $this->page['singleVehicle'] = $this->vehicles();
    }

    public function vehicles () {
        $slug = $this->property('slug');
        // Get all vehicles
        return Vehicle::where( 'slug', $slug )->get();
    }
}