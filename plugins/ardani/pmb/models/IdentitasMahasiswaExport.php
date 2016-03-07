<?php

namespace Ardani\Pmb\Models;
use Backend\Models\ExportModel;
use Ardani\Pmb\Models\IdentitasMahasiswa;

class IdentitasMahasiswaExport extends ExportModel
{
    public function exportData($columns, $sessionKey = null)
    {
        $mhs = IdentitasMahasiswa::all();
        $mhs->each(function($mhs) use ($columns) {
            $mhs->addVisible($columns);
        });
        return $mhs->toArray();
    }
}
