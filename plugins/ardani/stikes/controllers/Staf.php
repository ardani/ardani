<?php namespace Ardani\Stikes\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Staf Back-end Controller
 */
class Staf extends Controller
{
    public $requiredPermissions = ['ardani.stikes.staf'];
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Ardani.Stikes', 'stikes', 'staf');
    }

}