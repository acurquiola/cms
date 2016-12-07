<?php namespace Topsportstv\Streaming\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTopsportstvStreamingEventos5 extends Migration
{
    public function up()
    {
        Schema::table('topsportstv_streaming_eventos', function($table)
        {
            $table->renameColumn('deporte_id', 'deportes_id');
        });
    }
    
    public function down()
    {
        Schema::table('topsportstv_streaming_eventos', function($table)
        {
            $table->renameColumn('deportes_id', 'deporte_id');
        });
    }
}
