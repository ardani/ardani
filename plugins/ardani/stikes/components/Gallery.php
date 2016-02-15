<?php namespace Ardani\Stikes\Components;

use Ardani\Stikes\Models\Gallery as GalleryModel;
use Ardani\Stikes\Models\Kategori;
use Cms\Classes\ComponentBase;

class Gallery extends ComponentBase
{
    public $galleries;

    public function componentDetails()
    {
        return [
            'name'        => 'Gallery',
            'description' => 'gallery image in website'
        ];
    }

    public function defineProperties()
    {
        return [
            'catFilter' => [
                'title'       => 'Filter Gallery',
                'description' => 'show gallery by category',
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
        $this->galleries = $this->page['galleries'] = $this->listGallery();
    }

    protected function listGallery()
    {

        $gallery = GalleryModel::where('kategori_id',$this->property('catFilter'))
            ->get();
        return $gallery;
    }
}