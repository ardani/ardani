<?php namespace Ardani\Octomap\Models;

use Model;
use October\Rain\Database\Traits\Validation;
/**
 * map Model
 */
class Map extends Model
{
    use Validation;
    public $rules = [
        'location' => 'required',
        'information' => 'required',
        'title' => 'required'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ardani_octomap_maps';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'category' => 'Ardani\Octomap\Models\Category'
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'picture' => ['System\Models\File'],
        'icon' => ['System\Models\File'],
    ];
    public $attachMany = [];
    public function afterDelete()
    {
        $this->picture->delete();
        $this->icon->delete();
    }

    public function getCategoryIdOptions()
    {
        return [];
    }
}