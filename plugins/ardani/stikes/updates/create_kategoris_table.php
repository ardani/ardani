<?php namespace Ardani\Stikes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateKategorisTable extends Migration
{

    public function up()
    {
        Schema::create('ardani_stikes_kategoris', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nama_kategori',200);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ardani_stikes_kategoris');
    }

}
