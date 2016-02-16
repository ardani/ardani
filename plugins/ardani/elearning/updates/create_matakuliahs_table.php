<?php namespace Ardani\Elearning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateMatakuliahsTable extends Migration
{

    public function up()
    {
        Schema::create('ardani_elearning_matakuliahs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ardani_elearning_matakuliahs');
    }

}
