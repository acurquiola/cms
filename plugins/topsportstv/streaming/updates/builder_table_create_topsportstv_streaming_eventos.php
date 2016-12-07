<?php namespace Topsportstv\Streaming\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTopsportstvStreamingEventos extends Migration
{
    public function up()
    {
        Schema::create('topsportstv_streaming_eventos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('inicio');
            $table->date('fin');
            $table->integer('deporte_id')->unsigned();
            $table->string('titulo');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('topsportstv_streaming_eventos');
    }
}
