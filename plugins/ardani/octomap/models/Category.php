<?php namespace Ardani\Octomap\Models;

use Model;
use October\Rain\Database\Traits\Validation;

/**
 * category Model
 */
class Category extends Model
{

    use Validation;
    public $rules = [
        'category_name' => 'required'
    ];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'ardani_octomap_categories';

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
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}