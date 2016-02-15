<?php namespace Ardani\Octomap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCategoriesTable extends Migration
{

    public function up()
    {
        Schema::create('ardani_octomap_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('category_name', 250);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ardani_octomap_categories');
    }

}
