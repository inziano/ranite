<?php namespace Ranite\Chauffeur\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaniteChauffeurVehicle extends Migration
{
    public function up()
    {
        Schema::create('ranite_chauffeur_vehicle', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('registration_number');
            $table->date('year_of_manufacture');
            $table->text('vehicle_make');
            $table->smallInteger('engine_rating');
            $table->smallInteger('seating_capacity');
            $table->integer('price_per_day');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ranite_chauffeur_vehicle');
    }
}
