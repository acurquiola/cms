<?php namespace TopSportsTv\Subscriptions\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTopsportstvSubscriptionsPagos extends Migration
{
    public function up()
    {
        Schema::table('topsportstv_subscriptions_pagos', function($table)
        {
            $table->date('fecha');
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('topsportstv_subscriptions_pagos', function($table)
        {
            $table->dropColumn('fecha');
            $table->increments('id')->unsigned()->change();
        });
    }
}
