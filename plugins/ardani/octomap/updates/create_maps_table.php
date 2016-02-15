<?php namespace Ardani\Octomap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateMapsTable extends Migration
{

    public function up()
    {
        Schema::create('ardani_octomap_maps', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('location', 250);
            $table->string('title', 250);
            $table->text('information');
            $table->integer('category_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ardani_octomap_maps');
    }

}
