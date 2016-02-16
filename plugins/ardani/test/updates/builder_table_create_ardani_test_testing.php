<?php namespace Ardani\Test\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArdaniTestTesting extends Migration
{
    public function up()
    {
        Schema::create('ardani_test_testing', function($table)
        {
            $table->engine = 'InnoDB';
            $table->text('nama_lengkap');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ardani_test_testing');
    }
}
