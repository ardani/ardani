<?php namespace Ardani\Pmb\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Identitas Mahasiswa Back-end Controller
 */
class IdentitasMahasiswa extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.ImportExportController'
];

    public $requiredPermissions = ['ardani.pmb.identitas_mahasiswa'];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $importExportConfig = 'config_import_export.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Ardani.Pmb', 'PMB', 'identitasmahasiswa');
    }
}