<?php namespace Ranite\Chauffeur\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaniteChauffeurVehicle extends Migration
{
    public function up()
    {
        Schema::table('ranite_chauffeur_vehicle', function($table)
        {
            $table->boolean('available');
            $table->increments('id')->unsigned(false)->change();
            $table->string('vehicle_registration')->change();
            $table->string('vehicle_make')->change();
            $table->string('vehicle_color')->change();
            $table->string('vehicle_image')->change();
        });
    }
    
    public function down()
    {
        Schema::table('ranite_chauffeur_vehicle', function($table)
        {
            $table->dropColumn('available');
            $table->increments('id')->unsigned()->change();
            $table->string('vehicle_registration', 191)->change();
            $table->string('vehicle_make', 191)->change();
            $table->string('vehicle_color', 191)->change();
            $table->string('vehicle_image', 191)->change();
        });
    }
}
