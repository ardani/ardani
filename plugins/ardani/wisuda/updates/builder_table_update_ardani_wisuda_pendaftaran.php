<?php namespace Ardani\Wisuda\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArdaniWisudaPendaftaran extends Migration
{
    public function up()
    {
        Schema::table('ardani_wisuda_pendaftaran', function($table)
        {
            $table->integer('tahun_ajaran_id');
        });
    }
    
    public function down()
    {
        Schema::table('ardani_wisuda_pendaftaran', function($table)
        {
            $table->dropColumn('tahun_ajaran_id');
        });
    }
}
