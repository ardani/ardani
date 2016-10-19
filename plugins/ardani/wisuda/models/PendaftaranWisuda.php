<?php namespace Ardani\Wisuda\Models;

use Ardani\Pmb\Models\TahunAjaran;
use Model;

/**
 * Model
 */
class PendaftaranWisuda extends Model
{
    use \October\Rain\Database\Traits\Validation;
    protected $guarded = [];

    /*
     * Validation
     */
    public $rules = [
    ];

    public $attachOne = [
        'bukti_pembayaran' => ['System\Models\File'],
        'photo_ijazah' => ['System\Models\File']
    ];

    public $belongsTo = [
        'tahun_ajaran' => ['Ardani\Pmb\Models\TahunAjaran'],
    ];
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ardani_wisuda_pendaftaran';
    protected $appends = ['kode_tahun_ajaran'];

    public function getKodeTahunAjaranAttribute() {
        $id = $this->attributes['tahun_ajaran_id'];
        $tahun_ajaran = TahunAjaran::find($id);
        return $tahun_ajaran->kode_tahun_ajaran;
    }

}