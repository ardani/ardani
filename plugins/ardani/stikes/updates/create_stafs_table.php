<?php namespace Ardani\Stikes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateStafsTable extends Migration
{

    public function up()
    {
        Schema::create('ardani_stikes_stafs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nik',15)->nullable();
            $table->string('nama_depan',100);
            $table->string('nama_belakang',100);
            $table->string('email',100);
            $table->integer('tipe_staf')->nullable();
            $table->integer('jabatan_id')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ardani_stikes_stafs');
    }

}
