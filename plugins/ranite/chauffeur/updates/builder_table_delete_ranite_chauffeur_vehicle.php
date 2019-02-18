<?php namespace Ranite\Chauffeur\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteRaniteChauffeurVehicle extends Migration
{
    public function up()
    {
        Schema::dropIfExists('ranite_chauffeur_vehicle');
    }
    
    public function down()
    {
        Schema::create('ranite_chauffeur_vehicle', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('registration_number');
            $table->date('year_of_manufacture');
            $table->text('vehicle_make');
            $table->smallInteger('engine_rating');
            $table->smallInteger('seating_capacity');
            $table->integer('price_per_day');
        });
    }
}
