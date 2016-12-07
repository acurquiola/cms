<?php namespace Topsportstv\Streaming\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTopsportstvStreamingEventos7 extends Migration
{
    public function up()
    {
        Schema::table('topsportstv_streaming_eventos', function($table)
        {
            $table->string('status');
        });
    }
    
    public function down()
    {
        Schema::table('topsportstv_streaming_eventos', function($table)
        {
            $table->dropColumn('status');
        });
    }
}
