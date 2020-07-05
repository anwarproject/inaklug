<?php namespace Inaklug\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateInaklugPostService extends Migration
{
    public function up()
    {
        Schema::create('inaklug_post_service', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
            $table->text('description');
            $table->string('reservation', 15);
            $table->string('url_reg', 100);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('inaklug_post_service');
    }
}
