<?php namespace Ardani\Stikes\Models;

use Model;
use October\Rain\Database\Traits\Validation;

/**
 * staf Model
 */
class Staf extends Model
{
    use Validation;
    public $rules = [
        'nik' => 'required',
        'nama_depan' => 'required',
        'email' => 'required',
        'tipe_staf' => 'required'
    ];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'ardani_stikes_stafs';

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
        'jabatan' => 'Ardani\Stikes\Models\Jabatan'
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'picture' => ['System\Models\File'],
    ];
    public $append = ['nama_lengkap','nama_tipe_staf'];
    public $attachMany = [];

    public function getNamaLengkapAttribute()
    {
        return $this->nama_depan . ' ' . $this->nama_belakang;
    }

    public function getNamaTipeStafAttribute()
    {
        return ($this->tipe_staf == 1) ? "Dosen" : "Karyawan";
    }

    public function listJabatan($keyValue = null, $fieldName = null)
    {
        return Jabatan::all()->lists('nama_jabatan', 'id');
    }

    public function afterDelete()
    {
        $this->picture->delete();
    }
}