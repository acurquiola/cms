<?php namespace TopSportsTv\Subscriptions\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteTopsportstvSubscriptionsSubscriptionsUsers extends Migration
{
    public function up()
    {
        Schema::dropIfExists('topsportstv_subscriptions_subscriptions_users');
    }
    
    public function down()
    {
        Schema::create('topsportstv_subscriptions_subscriptions_users', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('user_id');
            $table->integer('subscription_id');
            $table->date('fecha');
            $table->primary(['user_id','subscription_id','fecha']);
        });
    }
}
