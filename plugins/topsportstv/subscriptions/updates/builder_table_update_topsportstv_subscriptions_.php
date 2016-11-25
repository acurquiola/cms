<?php namespace TopSportsTv\Subscriptions\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTopsportstvSubscriptions extends Migration
{
    public function up()
    {
        Schema::table('topsportstv_subscriptions_', function($table)
        {
            $table->integer('duracion_meses');
        });
    }
    
    public function down()
    {
        Schema::table('topsportstv_subscriptions_', function($table)
        {
            $table->dropColumn('duracion_meses');
        });
    }
}
