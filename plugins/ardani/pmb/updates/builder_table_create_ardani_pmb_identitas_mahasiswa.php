<?php namespace Ardani\Pmb\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArdaniPmbIdentitasMahasiswa extends Migration
{
    public function up()
    {
        Schema::create('ardani_pmb_identitas_mahasiswa', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('no_pendaftaran', 10);
            $table->string('nama_lengkap', 200);
            $table->string('email', 50);
            $table->string('kode_generate', 200);
            $table->string('tempat_lahir', 200);
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin', 1);
            $table->integer('tinggi');
            $table->integer('berat');
            $table->string('golongan_darah',4);
            $table->string('agama', 100);
            $table->string('no_telp', 20);
            $table->string('nama_ayah', 200);
            $table->string('nama_ibu', 200);
            $table->string('status_orang_tua', 20);
            $table->string('pekerjaan_ayah',200);
            $table->string('pekerjaan_ibu',200);
            $table->string('alamat_orang_tua', 200);
            $table->string('no_telp_orang_tua', 20);
            $table->integer('program_pendidikan_id');
            $table->integer('jalur_pendidikan_id');
            $table->string('nama_sekolah', 200);
            $table->string('jurusan', 200);
            $table->integer('lulus');
            $table->string('jenis_sekolah', 200);
            $table->text('alamat_sekolah');
            $table->decimal('rata_nilai_uan', 10, 0);
            $table->boolean('diterima')->default('0');;
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ardani_pmb_identitas_mahasiswa');
    }
}
