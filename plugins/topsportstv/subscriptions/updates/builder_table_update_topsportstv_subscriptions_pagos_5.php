<?php namespace TopSportsTv\Subscriptions\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTopsportstvSubscriptionsPagos5 extends Migration
{
    public function up()
    {
        Schema::table('topsportstv_subscriptions_pagos', function($table)
        {
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->renameColumn('fecha', 'fecha_pago');
        });
    }
    
    public function down()
    {
        Schema::table('topsportstv_subscriptions_pagos', function($table)
        {
            $table->dropColumn('fecha_inicio');
            $table->dropColumn('fecha_fin');
            $table->renameColumn('fecha_pago', 'fecha');
        });
    }
}
