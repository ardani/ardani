<?php namespace Ardani\Wisuda\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArdaniWisudaPendaftaran2 extends Migration
{
    public function up()
    {
        Schema::table('ardani_wisuda_pendaftaran', function($table)
        {
            $table->string('nama_orang_tua', 100)->nullable();
            $table->string('judul_skripsi', 250)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('tempat_lahir', 100)->nullable();
            $table->date('tgl_lahir')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('ardani_wisuda_pendaftaran', function($table)
        {
            $table->dropColumn('nama_orang_tua');
            $table->dropColumn('judul_skripsi');
            $table->dropColumn('email');
            $table->dropColumn('tempat_lahir');
            $table->dropColumn('tgl_lahir');
        });
    }
}
