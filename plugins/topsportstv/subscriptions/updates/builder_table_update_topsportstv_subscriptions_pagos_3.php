<?php namespace TopSportsTv\Subscriptions\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTopsportstvSubscriptionsPagos3 extends Migration
{
    public function up()
    {
        Schema::table('topsportstv_subscriptions_pagos', function($table)
        {
            $table->integer('subscription_id');
            $table->integer('user_id');
            $table->dropColumn('subscriptions_id');
            $table->dropColumn('users_id');
        });
    }
    
    public function down()
    {
        Schema::table('topsportstv_subscriptions_pagos', function($table)
        {
            $table->dropColumn('subscription_id');
            $table->dropColumn('user_id');
            $table->integer('subscriptions_id');
            $table->integer('users_id');
        });
    }
}
