<?php namespace Topsportstv\Streaming\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTopsportstvStreamingDeportes extends Migration
{
    public function up()
    {
        Schema::create('topsportstv_streaming_deportes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('descripcion');
            $table->integer('minutos')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('topsportstv_streaming_deportes');
    }
}
