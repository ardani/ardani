<?php namespace Ardani\Pmb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArdaniPmbJalurPendidikan extends Migration
{
    public function up()
    {
        Schema::create('ardani_pmb_jalur_pendidikan', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('nama_jalur_pendidikan', 200);
            $table->date('tanggal_mulai');
            $table->date('tanggal_akhir');
            $table->integer('tahun_ajaran_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ardani_pmb_jalur_pendidikan');
    }
}
