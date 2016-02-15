<?php namespace Ardani\Stikes\Models;

use Model;
use October\Rain\Database\Traits\Validation;

/**
 * jabatan Model
 */
class Jabatan extends Model
{
    use Validation;
    // .. previously used code ..
    public $rules = [
        'nama_jabatan' => 'required|min:3|max:255',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ardani_stikes_jabatans';

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