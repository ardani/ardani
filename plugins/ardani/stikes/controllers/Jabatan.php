<?php namespace Ardani\Stikes\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Jabatan Back-end Controller
 */
class Jabatan extends Controller
{
    public $requiredPermissions = ['ardani.stikes.jabatan'];
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Ardani.Stikes', 'stikes', 'jabatan');
    }
}