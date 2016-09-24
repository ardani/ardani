<?php
/**
 * Created by PhpStorm.
 * User: ardani
 * Date: 9/24/16
 * Time: 12:02
 */
namespace Ardani\Wisuda\Components;
use Ardani\Pmb\Models\ProgramPendidikan;
use Ardani\Pmb\Models\TahunAjaran;
use Ardani\Wisuda\Models\PendaftaranWisuda;
use Cms\Classes\ComponentBase;
use Input;
use October\Rain\Exception\ValidationException;
use System;
use Validator;

class DaftarWisuda extends ComponentBase {

    /**
     * Returns information about this component, including name and description.
     */
    public function componentDetails() {
        return [
            'name'        => 'Daftar Wisuda Component',
            'description' => 'Manage Pendaftaran Mahasiswa Wisuda'
        ];
    }

    public function onRun()
    {
        $this->page['program_pendidikans'] = $this->program_pendidikan();
        $this->page['tahun_ajaran'] = $this->tahun_ajaran();
    }

    private function program_pendidikan() {
        $programs = ProgramPendidikan::get();
        return $programs;
    }

    private function tahun_ajaran() {
        $tahun_ajaran = TahunAjaran::where('aktif',1)->first();
        return $tahun_ajaran;
    }

    public function onSave() {
        try {
            $uploadedFile = Input::file('bukti_pembayaran');
            $validationRules = ['max:'.System\Models\File::getMaxFilesize()];
            $validationRules[] = 'mimes:jpg,jpeg,bmp,png';

            $validation = Validator::make(
                ['bukti_pembayaran' => $uploadedFile],
                ['bukti_pembayaran' => $validationRules]
            );

            if ($validation->fails())
                throw new ValidationException($validation);

            $post = Input::only('tahun_ajaran_id','nama_mahasiswa','no_hp','alamat','jurusan','nim');
            $result = PendaftaranWisuda::create($post);
            if ($result) {
                $new_id = $result->id;
                $this->processFileUpload($new_id,$uploadedFile);
                $param = array(
                    'nama_mahasiswa' => $post['nama_mahasiswa'],
                    'result' => true
                );
                $this->page['result'] = $this->renderPartial('daftarwisudaresult.htm',$param);
            }
        } catch (\Exception $ex) {
            $param = array(
                'result' => false,
                'message' => ''
            );
            $this->page['result'] = $this->renderPartial('daftarwisudaresult.htm',$param);
        }
    }

    private function processFileUpload($id,$uploadedFile)
    {
        $file = new System\Models\File();
        $file->data = $uploadedFile;
        $file->save();

        $mhs = PendaftaranWisuda::find($id);
        $mhs->bukti_pembayaran()->add($file);

    }
}