<?php namespace Ardani\Elearning\Models;

use Model;

/**
 * materi Model
 */
class Materi extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ardani_elearning_materis';

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