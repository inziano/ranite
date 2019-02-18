<?php namespace Ranite\Chauffeur\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaniteChauffeurVehicleOwner extends Migration
{
    public function up()
    {
        Schema::create('ranite_chauffeur_vehicle_owner', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->bigInteger('national_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->integer('phone_number');
            $table->string('gender');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ranite_chauffeur_vehicle_owner');
    }
}
