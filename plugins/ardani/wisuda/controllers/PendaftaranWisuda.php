<?php namespace Ardani\Wisuda\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Ardani\Wisuda\Models\PendaftaranWisuda as Pendaftaran;
use October\Rain\Support\Facades\Flash;

class PendaftaranWisuda extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend.Behaviors.ImportExportController'
    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $importExportConfig = 'config_import_export.yaml';
    public $requiredPermissions = ['ardani.wisuda.access_wisuda'];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Ardani.Wisuda', 'pendaftaranwisuda', 'daftar');
    }

    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            foreach ($checkedIds as $mahasiswaid) {
                if ((!$mhs = Pendaftaran::find($mahasiswaid)))
                    continue;
                $mhs->delete();
            }
            Flash::success('Successfully deleted those Mahasiswa.');
        }

        return $this->listRefresh();
    }

    public function listExtendColumns($list)
    {
        /*$list->addColumns([
            'action' => [
                'label' => 'Menu'
            ]
        ]);*/
    }
}