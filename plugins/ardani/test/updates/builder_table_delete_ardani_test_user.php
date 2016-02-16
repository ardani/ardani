<?php namespace Ardani\Test\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteArdaniTestUser extends Migration
{
    public function up()
    {
        Schema::dropIfExists('ardani_test_user');
    }
    
    public function down()
    {
        Schema::create('ardani_test_user', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 200);
            $table->text('desc');
        });
    }
}
