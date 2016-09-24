<?php namespace Ardani\Wisuda\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArdaniWisudaPendaftaran extends Migration
{
    public function up()
    {
        Schema::create('ardani_wisuda_pendaftaran', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('nim', 20)->nullable();
            $table->string('nama_mahasiswa', 100)->nullable();
            $table->text('alamat')->nullable();
            $table->string('no_hp', 15)->nullable();
            $table->string('jurusan', 25)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ardani_wisuda_pendaftaran');
    }
}
