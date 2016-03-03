<?php namespace Ardani\Pmb\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class JalurPendidikan extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    public $requiredPermissions = ['ardani.pmb.jalur_pendidikan'];
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Ardani.Pmb', 'PMB', 'jalurpendidikan');
    }
}