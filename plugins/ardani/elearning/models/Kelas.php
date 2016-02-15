<?php namespace Ardani\Elearning\Models;

use Model;

/**
 * kelas Model
 */
class Kelas extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ardani_elearning_kelas';

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