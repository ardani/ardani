<?php namespace Ardani\Stikes\Models;

use Model;
use October\Rain\Database\Traits\Validation;

/**
 * gallery Model
 */
class Gallery extends Model
{
    use Validation;
    public $rules = [
        'judul' => 'required',
        'deskripsi' => 'required',
        'image_path' => 'required'
    ];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'ardani_stikes_galleries';

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
        "kategori" => 'Ardani\Stikes\Models\Kategori'
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public function listKategori($keyValue = null, $fieldName = null)
    {
        return Kategori::all()->lists('nama_kategori', 'id');
    }
}