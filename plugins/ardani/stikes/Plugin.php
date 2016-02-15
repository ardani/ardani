<?php namespace Ardani\Stikes;

use System\Classes\PluginBase;
use Backend;

/**
 * stikes Plugin Information File
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
            'name'        => 'STIKES BHAKTI MULIA',
            'description' => 'module for STIKES BHAKTI MULIA',
            'author'      => 'ardani',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerNavigation()
    {
        return [
            'stikes' => [
                'label'       => 'Stikes',
                'url'         => Backend::url('ardani/stikes/staf'),
                'icon'        => 'icon-building',
                'permissions' => ['ardani.stikes.*'],
                'order'       => 500,
                'sideMenu'    => [
                    'staf'    => [
                        'label'       => 'Staf',
                        'icon'        => 'icon-user',
                        'url'         => Backend::url('ardani/stikes/staf'),
                        'permissions' => ['ardani.stikes.staf'],
                    ],
                    'jabatan'        => [
                        'label'       => 'Jabatan',
                        'icon'        => 'icon-briefcase',
                        'url'         => Backend::url('ardani/stikes/jabatan'),
                        'permissions' => ['ardani.stikes.jabatan'],
                    ],
                    'gallery'        => [
                        'label'       => 'Gallery',
                        'icon'        => 'icon-picture-o',
                        'url'         => Backend::url('ardani/stikes/gallery'),
                        'permissions' => ['ardani.stikes.gallery'],
                    ],
                    'slider'        => [
                        'label'       => 'Slider',
                        'icon'        => 'icon-picture-o',
                        'url'         => Backend::url('ardani/stikes/slider'),
                        'permissions' => ['ardani.stikes.slider'],
                    ],
                    'filelist'        => [
                        'label'       => 'File Upload',
                        'icon'        => 'icon-upload',
                        'url'         => Backend::url('one47/filelist/filelists')
                    ],
                ],
            ],
        ];
    }

    public function registerComponents() {
        return [
            'Ardani\Stikes\Components\Staf'    => 'Staf',
            'Ardani\Stikes\Components\Gallery'    => 'Gallery',
            'Ardani\Stikes\Components\Slider'    => 'Slider'
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'Settings',
                'description' => 'Manage information of STIKES BHAKTI MULIA',
                'category'    => 'STIKES BHAKTI MULIA',
                'icon'        => 'icon-cog',
                'class'       => 'Ardani\Stikes\Models\Settings'
            ]
        ];
    }

    public function registerPermissions()
    {
        return [
            'ardani.stikes.staf' => ['label' => 'Manage Staf', 'tab' => 'Stikes'],
            'ardani.stikes.jabatan' => ['label' => 'Manage Jabatan', 'tab' => 'Stikes'],
            'ardani.stikes.kategori' => ['label' => 'Manage Kategori', 'tab' => 'Stikes'],
            'ardani.stikes.gallery' => ['label' => 'Manage Gallery', 'tab' => 'Stikes'],
            'ardani.stikes.slider' => ['label' => 'Manage Slider', 'tab' => 'Stikes'],
        ];
    }


}
