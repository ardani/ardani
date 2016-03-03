<?php namespace Ardani\Pmb\Components;

use Ardani\Pmb\Models\IdentitasMahasiswa;
use Cms\Classes\ComponentBase;

class CetakFormulir extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Cetak Formulir Component',
            'description' => 'Ambil data calon mahasiswa'
        ];
    }

    public function defineProperties()
    {
        return [
            'code' => [
                'title'       => 'kode pendaftaran',
                'description' => 'kombinasi antara no pendaftaran dan kode generat',
                'default'     => '{{ :code }}',
                'type'        => 'string'
            ]
        ];
    }

    public function onRun() {
        $this->page['mahasiswa'] = $this->getIdentitasMahasiswa();
    }

    private function getIdentitasMahasiswa() {
        $code = $this->property('code');
        $no_pendaftaran = substr($code,0,6);
        $kode_generate = str_replace($no_pendaftaran,"",$code);
        $mahasiswa = IdentitasMahasiswa::with('program_pendidikan')->where('no_pendaftaran',$no_pendaftaran)
            ->where('kode_generate', $kode_generate)->first();
        return $mahasiswa;
    }
}