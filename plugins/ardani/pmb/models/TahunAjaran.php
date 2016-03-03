<?php namespace Ardani\Pmb\Models;

use Model;
use October\Rain\Database\Traits\Validation;

/**
 * Model
 */
class TahunAjaran extends Model
{
    use Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ardani_pmb_tahun_ajaran';

    public function scopeIsActive($query) {
        return $query->where('aktif', 1);
    }
}