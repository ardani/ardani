<?php namespace Ardani\Pmb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArdaniPmbProgramPendidikan extends Migration
{
    public function up()
    {
        Schema::create('ardani_pmb_program_pendidikan', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('tahun_ajaran_id');
            $table->string('nama_program_pendidikan', 200);
            $table->boolean('aktif');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ardani_pmb_program_pendidikan');
    }
}
