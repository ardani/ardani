<?php namespace Ardani\Pmb\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class ProgramPendidikan extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    public $requiredPermissions = ['ardani.pmb.program_pendidikan'];
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Ardani.Pmb', 'PMB', 'programpendidikan');
    }
}