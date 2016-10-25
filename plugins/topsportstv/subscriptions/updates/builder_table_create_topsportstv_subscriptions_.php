<?php namespace TopSportsTv\Subscriptions\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTopsportstvSubscriptions extends Migration
{
    public function up()
    {
        Schema::create('topsportstv_subscriptions_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre', 50);
            $table->text('descripcion')->nullable();
            $table->integer('precio')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('topsportstv_subscriptions_');
    }
}
