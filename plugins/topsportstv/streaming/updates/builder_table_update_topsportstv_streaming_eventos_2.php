<?php namespace Topsportstv\Streaming\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTopsportstvStreamingEventos2 extends Migration
{
    public function up()
    {
        Schema::table('topsportstv_streaming_eventos', function($table)
        {
            $table->integer('deportes_id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('topsportstv_streaming_eventos', function($table)
        {
            $table->integer('deportes_id')->unsigned()->change();
        });
    }
}
