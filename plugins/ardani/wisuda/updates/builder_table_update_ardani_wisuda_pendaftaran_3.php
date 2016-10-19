<?php namespace Ardani\Wisuda\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArdaniWisudaPendaftaran3 extends Migration
{
    public function up()
    {
        Schema::table('ardani_wisuda_pendaftaran', function($table)
        {
            $table->renameColumn('tgl_lahir', 'tanggal_lahir');
        });
    }
    
    public function down()
    {
        Schema::table('ardani_wisuda_pendaftaran', function($table)
        {
            $table->renameColumn('tanggal_lahir', 'tgl_lahir');
        });
    }
}
