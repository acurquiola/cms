<?php namespace TopSportsTv\Subscriptions\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTopsportstvSubscriptionsPagos8 extends Migration
{
    public function up()
    {
        Schema::table('topsportstv_subscriptions_pagos', function($table)
        {
            $table->renameColumn('nro_referecia', 'nro_referencia');
        });
    }
    
    public function down()
    {
        Schema::table('topsportstv_subscriptions_pagos', function($table)
        {
            $table->renameColumn('nro_referencia', 'nro_referecia');
        });
    }
}
