<?php namespace Ranite\Chauffeur;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Ranite\Chauffeur\Components\VehicleList'=> 'vehicleList',
            'Ranite\Chauffeur\Components\TopRentals'=> 'toprentals',
            'Ranite\Chauffeur\Components\VehicleDetail'=> 'vehicledetails',

        ];
    }

    public function registerSettings()
    {
    }

    public function registerMarkupTags () 
    {
        // Extend twig to convert hex codes
    
    }
 }
