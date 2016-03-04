<?php namespace Ardani\Pmb\Models;

use Model;
use October\Rain\Database\Traits\Validation;

/**
 * Model
 */
class IdentitasMahasiswa extends Model
{
    use Validation;

    /*
     * Validation
     */
    protected $guarded = ['diterima'];

    public $rules = [
    ];

    public $hasOne = [
    ];

    public $attachOne = [
        'photo' => ['System\Models\File']
    ];

    public $belongsTo = [
        'program_pendidikan' => ['Ardani\Pmb\Models\ProgramPendidikan'],
        'jalur_pendidikan' => ['Ardani\Pmb\Models\JalurPendidikan'],
    ];
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ardani_pmb_identitas_mahasiswa';

}