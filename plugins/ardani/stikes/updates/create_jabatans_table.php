<?php namespace Ardani\Stikes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateJabatansTable extends Migration
{

    public function up()
    {
        Schema::create('ardani_stikes_jabatans', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nama_jabatan', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ardani_stikes_jabatans');
    }

}
