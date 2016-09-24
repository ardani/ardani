<?php namespace Ardani\Pmb\Components;

use Cms\Classes\ComponentBase;
use Ardani\Pmb\Models\ProgramPendidikan;
use Ardani\Pmb\Models\JalurPendidikan;
use Ardani\Pmb\Models\IdentitasMahasiswa;
use Input;
use System;
use Validator;
use October\Rain\Exception\ValidationException;

class Pmb extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Pmb Component',
            'description' => 'Manage Pendaftaran Mahasiswa Baru'
        ];
    }

    public function defineProperties()
    {
        return [
            'code' => [
                'title'       => 'kode pendaftaran',
                'description' => 'kombinasi antara no pendaftaran dan kode generate',
                'default'     => '{{ :code }}',
                'type'        => 'string'
            ]
        ];
    }

    public function onRun()
    {
        $this->page['program_pendidikans'] = $this->program_pendidikan();
        if ($this->get_jalur_pendidikan()) {
            $this->page['jalur'] = $this->get_jalur_pendidikan();
            $this->page['isOpen'] = true;
        }else {
            $this->page['isOpen'] = false;
        }
    }

    private function program_pendidikan() {
        $programs = ProgramPendidikan::get();
        return $programs;
    }

    public function onSave() {
        //$uploadedFile = Input::file('photo');
        try {
            $uploadedFile = Input::file('photo');
            $validationRules = ['max:'.System\Models\File::getMaxFilesize()];
            $validationRules[] = 'mimes:jpg,jpeg,bmp,png';

            $validation = Validator::make(
                ['photo' => $uploadedFile],
                ['photo' => $validationRules]
            );

            if ($validation->fails())
                throw new ValidationException($validation);

            $post = Input::except('photo');
            $jalur = $this->get_jalur_pendidikan();
            $post['jalur_pendidikan_id'] = $jalur->id;
            $post['no_pendaftaran'] = $this->autonumber('no_pendaftaran',3,'PMB');
            $post['kode_generate'] = $this->generate_code();
            $result = IdentitasMahasiswa::create($post);
            if ($result) {
                $new_id = $result->id;
                $this->processFileUpload($new_id,$uploadedFile);
                $param = array(
                    'nama_lengkap' => $post['nama_lengkap'],
                    "no_pendaftaran" => $post['no_pendaftaran'],
                    'kode_generate' => $post['kode_generate'],
                    'result' => true
                );
                $this->page['result'] = $this->renderPartial('pmbresult.htm',$param);
            }
        } catch (\Exception $ex) {
            $param = array(
                'result' => false,
                'message' => $ex->getMessage()
            );
            $this->page['result'] = $this->renderPartial('pmbresult.htm',$param);
        }
    }

    private function get_jalur_pendidikan() {
        $now = date("Y-m-d");
        $jalur_pendidikan = JalurPendidikan::whereHas('tahun_ajaran', function ($q) {
            $q->isActive();
        })->where('tanggal_mulai','<=',$now)
            ->where('tanggal_akhir','>=',$now)
            ->first();
        return $jalur_pendidikan;
    }

    private function processFileUpload($id,$uploadedFile)
    {

            $file = new System\Models\File();
            $file->data = $uploadedFile;
            $file->save();

            $mhs = IdentitasMahasiswa::find($id);
            $mhs->photo()->add($file);

    }

    private function generate_code($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    private function autonumber($kolom, $lebar=0, $awalan='') {
        $mhs = IdentitasMahasiswa::orderBy($kolom,'desc');
        $jumlah = $mhs->count();
        if ($jumlah == 0) {
            $nomor = 1;
        } else {
            $row = $mhs->first()->toArray();
            $nomor = intval(substr($row[$kolom],strlen($awalan)))+1;
        }

    if ($lebar > 0)
        $angka = $awalan.str_pad($nomor,$lebar,"0",STR_PAD_LEFT);
    else
        $angka = $awalan.$nomor;
    return $angka;
    }
}