<?php namespace TopSportsTv\Subscriptions\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTopsportstvSubscriptionsPagos extends Migration
{
    public function up()
    {
        Schema::create('topsportstv_subscriptions_pagos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('subscription_id');
            $table->integer('user_id');
            $table->string('metodo_pago');
            $table->integer('monto');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('topsportstv_subscriptions_pagos');
    }
}
