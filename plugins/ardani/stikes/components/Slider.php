<?php namespace Ardani\Stikes\Components;

use Ardani\Stikes\Models\Kategori;
use Ardani\Stikes\Models\Slider as SliderModel;
use Cms\Classes\ComponentBase;

class Slider extends ComponentBase
{
    public $sliders;

    public function componentDetails()
    {
        return [
            'name'        => 'Slider Header',
            'description' => 'show slider in header web'
        ];
    }

    public function defineProperties()
    {
        return [
            'catFilter' => [
                'title'       => 'Filter Slider',
                'description' => 'show slider by category',
                'type'        => 'dropdown',
                'default'     => 1
            ],
        ];
    }

    public function getCatFilterOptions()
    {
        return Kategori::all()->lists('nama_kategori', 'id');
    }

    public function onRun()
    {
        $this->sliders = $this->page['sliders'] = $this->listSlider();
    }

    protected function listSlider()
    {
        $slider = SliderModel::where('kategori_id',$this->property('catFilter'))
            ->get();
        return $slider;
    }
}