<?php namespace Ardani\Wisuda;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Ardani\Wisuda\Components\DaftarWisuda' => 'DaftarWisuda',
        ];
    }

    public function registerSettings()
    {
    }

    public function registerPermissions()
    {
        return [
            'ardani.wisuda.access_wisuda' => ['label' => 'Manage Access Wisuda', 'tab' => 'Wisuda'],
        ];
    }
}
