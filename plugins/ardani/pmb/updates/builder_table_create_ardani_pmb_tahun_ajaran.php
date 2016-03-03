<?php namespace Ardani\Pmb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArdaniPmbTahunAjaran extends Migration
{
    public function up()
    {
        Schema::create('ardani_pmb_tahun_ajaran', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('kode_tahun_ajaran');
            $table->boolean('aktif');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ardani_pmb_tahun_ajaran');
    }
}
