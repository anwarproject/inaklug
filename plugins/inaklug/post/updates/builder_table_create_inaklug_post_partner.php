<?php namespace Inaklug\Post\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateInaklugPostPartner extends Migration
{
    public function up()
    {
        Schema::create('inaklug_post_partner', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('description', 50);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('inaklug_post_partner');
    }
}
