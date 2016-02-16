<?php namespace Ardani\Elearning;

use System\Classes\PluginBase;

/**
 * elearning Plugin Information File
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
            'name'        => 'elearning',
            'description' => 'No description provided yet...',
            'author'      => 'ardani',
            'icon'        => 'icon-leaf'
        ];
    }

}
