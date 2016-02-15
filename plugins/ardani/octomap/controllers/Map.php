<?php namespace Ardani\Octomap\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Map Back-end Controller
 */
class Map extends Controller
{
    public $requiredPermissions = ['ardani.octomap.access_map'];
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Ardani.Octomap', 'octomap', 'map');
    }
}