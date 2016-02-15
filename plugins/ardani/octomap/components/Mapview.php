<?php namespace Ardani\Octomap\Components;

use Cms\Classes\ComponentBase;

class Mapview extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Map View',
            'description' => 'show google map in page'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

}