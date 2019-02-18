<?php namespace Ranite\Chauffeur\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaniteChauffeurVehicle2 extends Migration
{
    public function up()
    {
        Schema::create('ranite_chauffeur_vehicle', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('vehicle_registration');
            $table->string('vehicle_make');
            $table->date('year_of_manufacture');
            $table->smallInteger('engine_rating');
            $table->smallInteger('seating_capacity');
            $table->string('vehicle_color');
            $table->string('vehicle_image');
            $table->integer('price_per_day');
            $table->integer('owner');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ranite_chauffeur_vehicle');
    }
}
