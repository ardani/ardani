<?php namespace Ardani\Octomap;

use System\Classes\PluginBase;
use Backend;

/**
 * octomap Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'OctoMap',
            'description' => 'add marker to google map easily and show in page',
            'author'      => 'ardani',
            'icon'        => 'icon-map-marker',
            'homepage'    => 'https://ardani.github.io/'
        ];
    }

    public function registerNavigation()
    {
        return [
            'octomap' => [
                'label'       => 'Octomap',
                'url'         => Backend::url('ardani/octomap/map'),
                'icon'        => 'icon-map-marker',
                'permissions' => ['ardani.octomap.*'],
                'order'       => 500,

                'sideMenu' => [
                    'new_map' => [
                        'label'       => 'New Map',
                        'icon'        => 'icon-plus',
                        'url'         => Backend::url('ardani/octomap/map/create'),
                        'permissions' => ['ardani.octomap.access_map']
                    ],
                    'map' => [
                        'label'       => 'View Map',
                        'icon'        => 'icon-map-o',
                        'url'         => Backend::url('ardani/octomap/map'),
                        'permissions' => ['ardani.octomap.access_map']
                    ],
                    'category' => [
                        'label'       => 'Category',
                        'icon'        => 'icon-list',
                        'url'         => Backend::url('ardani/octomap/category'),
                        'permissions' => ['ardani.octomap.access_category']
                    ]
                ]
            ]
        ];
    }

    public function registerPermissions()
    {
        return [
            'ardani.octomap.access_map' => ['label' => 'Manage Map', 'tab' => 'Octomap'],
            'ardani.octomap.access_category' => ['label' => 'Manage Category', 'tab' => 'Octomap'],
        ];
    }

    public function registerComponents() {
        return [
            'Ardani\Octomap\Components\Mapview'       => 'MapView',
        ];
    }

}
