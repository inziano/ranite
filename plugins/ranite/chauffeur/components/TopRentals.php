<?php 
namespace Ranite\Chauffeur\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use RainLab\Builder\Classes\ComponentHelper;

use Ranite\Chauffeur\Models\Vehicle;

Class TopRentals extends ComponentBase 
{
   
    /**
     * Holds the collection from the database.
     * @var string
     */
    public $allVehicles;
    
    /**
     * Reference to the page name for linking to details.
     * @var string
     */
    public $detailsPage;

    /**
     * Reference to the URL for linking to details.
     * @var string
     */
    public $detailsURL;

    /**
     * Model column to use as a record identifier in the details page links
     * @var string
     */
    public $detailsKeyColumn;


    public function componentDetails () {
        return [
            'name' => 'Top Rentals',
            'description' => 'List of top rented vehicles'
        ];
    }

    // Component properties
    public function defineProperties () {
        return [
            'maxItems' => [
                'title'             => 'Max items',
                'description'       => 'The amount of top rentals to be shown',
                'default'           => 3,
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'The Max Items property can contain only numeric symbols'
            ],

            'detailsPage' => [
                'title' => 'Details Page',
                'type' => 'dropdown',
                'group'       => 'Details Page Link'
            ],

            'detailsUrlParameter' => [
                'title'       => 'Details URL',
                'type'        => 'string',
                'default'     => 'id',
                'group'       => 'Details Page Link'
            ]
        ];
    }

    public function getDetailsPageOptions () {
        return Page::sortBy('baseFileName')->lists('baseFileName','baseFileName');
    }

    // Load all vehicles
    public function onRun () {

        $this->setVars();
        // Pass vehicles to global vehicle variable
        $this->allVehicles = $this->page['allVehicles'] = $this->vehicles();
    }

    // Set vars
    public function setVars () {

        // Details page
        $detailsPage = $this->property('detailsPage');
        if ($detailsPage == '-') {
            $detailsPage = null;
        }

        $this->detailsPage = $this->page['detailsPage'] = $detailsPage;

        // Details URL
        $this->detailsURL = $this->page['detailsUrlParameter'] = $this->property('detailsUrlParameter');

    }

    public function vehicles () {
        // Get all vehicles
        return Vehicle::paginate(3);
    }
}