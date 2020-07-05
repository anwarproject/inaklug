<?php namespace Inaklug\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateInaklugPost extends Migration
{
    public function up()
    {
        Schema::table('inaklug_post_', function($table)
        {
            $table->string('title', 255);
        });
    }
    
    public function down()
    {
        Schema::table('inaklug_post_', function($table)
        {
            $table->dropColumn('title');
        });
    }
}
