<?php namespace Ranite\Chauffeur\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaniteChauffeurVehicle2 extends Migration
{
    public function up()
    {
        Schema::table('ranite_chauffeur_vehicle', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('ranite_chauffeur_vehicle', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
