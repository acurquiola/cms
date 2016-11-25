<?php namespace TopSportsTv\Subscriptions\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTopsportstvSubscriptionsPagos9 extends Migration
{
    public function up()
    {
        Schema::table('topsportstv_subscriptions_pagos', function($table)
        {
            $table->string('estado', 10)->default('pendiente');
        });
    }
    
    public function down()
    {
        Schema::table('topsportstv_subscriptions_pagos', function($table)
        {
            $table->dropColumn('estado');
        });
    }
}
