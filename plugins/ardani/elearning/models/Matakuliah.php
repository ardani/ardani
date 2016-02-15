<?php namespace Ardani\Elearning\Models;

use Model;

/**
 * matakuliah Model
 */
class Matakuliah extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ardani_elearning_matakuliahs';

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