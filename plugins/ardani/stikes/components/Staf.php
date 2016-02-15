<?php namespace Ardani\Stikes\Components;

use Ardani\Stikes\Models\Staf as StafModel;
use Cms\Classes\ComponentBase;
use Redirect;

class Staf extends ComponentBase
{
    public $maxItem;
    public $pageNumber;
    public $stafFilter;
    public $stafs;


    public function componentDetails()
    {
        return [
            'name'        => 'Staf Component',
            'description' => 'list of staf at company'
        ];
    }

    public function defineProperties()
    {
        return [
            'maxItem' => [
                'title'       => 'items per page',
                'description' => 'show item per page',
                'default'     => '20',
                'type'        => 'string'
            ],
            'stafFilter' => [
                'title'       => 'Filter staf by tipe staf',
                'description' => 'filter staf by tipe staf',
                'type'        => 'dropdown',
                'default'     => 1
            ],
        ];
    }

    public function getStafFilterOptions()
    {
        return [1 => "Dosen" , 2 => "Karyawan"];
    }

    public function onRun()
    {
        $this->stafs = $this->page['stafs'] = $this->listStafs();
    }

    protected function listStafs()
    {
        $this->stafFilter = $this->property('stafFilter');
        $stafs = StafModel::with('jabatan','picture')
            ->where('tipe_staf',$this->stafFilter)
            ->paginate($this->property('maxItem'));
        return $stafs;
    }
}