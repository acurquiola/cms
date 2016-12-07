<?php namespace Topsportstv\Streaming\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTopsportstvStreamingEventos6 extends Migration
{
    public function up()
    {
        Schema::table('topsportstv_streaming_eventos', function($table)
        {
            $table->string('descripcion')->nullable();
            $table->string('enlace');
            $table->boolean('publicado');
            $table->boolean('destacado');
        });
    }
    
    public function down()
    {
        Schema::table('topsportstv_streaming_eventos', function($table)
        {
            $table->dropColumn('descripcion');
            $table->dropColumn('enlace');
            $table->dropColumn('publicado');
            $table->dropColumn('destacado');
        });
    }
}
