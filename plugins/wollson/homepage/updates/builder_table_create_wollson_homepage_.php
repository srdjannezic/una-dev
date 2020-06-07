<?php namespace Wollson\Homepage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWollsonHomepage extends Migration
{
    public function up()
    {
        Schema::create('wollson_homepage_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('images')->nullable();
            $table->text('sections')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wollson_homepage_');
    }
}
