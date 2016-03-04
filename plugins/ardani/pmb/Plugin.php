<?php namespace Ardani\Pmb;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Ardani\Pmb\Components\Pmb' => 'Pmb',
            'Ardani\Pmb\Components\CetakFormulir' => 'CetakFormulir'
        ];
    }

    public function registerSettings()
    {
    }

    public function registerMarkupTags()
    {
        return [
            'filters' => [
                'uppercase' => [$this, 'makeTextAllCaps']
            ],
            'functions' => [
                'hello' => function($value) { return print_r($value); }
            ]
        ];
    }

    public function makeTextAllCaps($text)
    {
        return strtoupper($text);
    }

    public function registerPermissions()
    {
        return [
            'ardani.pmb.tahun_ajaran' => ['label' => 'Manage Tahun Ajaran', 'tab' => 'PMB'],
            'ardani.stikes.jalur_pendidikan' => ['label' => 'Manage Jalur Pendidikan', 'tab' => 'PMB'],
            'ardani.stikes.program_pendidikan' => ['label' => 'Manage Program Pendidikan', 'tab' => 'PMB'],
            'ardani.stikes.identitas_mahasiswa' => ['label' => 'Manage Identitas Mahasiswa', 'tab' => 'PMB'],
        ];
    }
}
