<?php namespace Inaklug\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateInaklugPost extends Migration
{
    public function up()
    {
        Schema::create('inaklug_post_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('inaklug_post_');
    }
}
