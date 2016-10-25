<?php namespace TopSportsTv\Subscriptions\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTopsportstvSubscriptionsPagos4 extends Migration
{
    public function up()
    {
        Schema::table('topsportstv_subscriptions_pagos', function($table)
        {
            $table->integer('subscriptions_id');
            $table->integer('users_id');
            $table->dropColumn('subscription_id');
            $table->dropColumn('user_id');
        });
    }
    
    public function down()
    {
        Schema::table('topsportstv_subscriptions_pagos', function($table)
        {
            $table->dropColumn('subscriptions_id');
            $table->dropColumn('users_id');
            $table->integer('subscription_id');
            $table->integer('user_id');
        });
    }
}
