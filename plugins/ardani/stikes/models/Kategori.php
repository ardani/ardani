<?php namespace Ardani\Stikes\Models;

use Model;
use October\Rain\Database\Traits\Validation;

/**
 * kategori Model
 */
class Kategori extends Model
{
    use Validation;
    public $rules = [
        'nama_kategori' => 'required'
    ];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'ardani_stikes_kategoris';

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