<?php namespace Ardani\Stikes\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Kategori Back-end Controller
 */
class Kategori extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $requiredPermissions = ['ardani.stikes.kategori'];
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Ardani.Stikes', 'stikes', 'kategori');
    }
}