<?php namespace Ranite\Chauffeur\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaniteChauffeurVehicle3 extends Migration
{
    public function up()
    {
        Schema::table('ranite_chauffeur_vehicle', function($table)
        {
            $table->integer('owner')->default(0)->change();
        });
    }
    
    public function down()
    {
        Schema::table('ranite_chauffeur_vehicle', function($table)
        {
            $table->integer('owner')->default(null)->change();
        });
    }
}
