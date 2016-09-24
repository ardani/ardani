<?php

namespace Ardani\Wisuda\Models;
use Backend\Models\ExportModel;

class PendaftaranWisudaExport extends ExportModel
{
    public function exportData($columns, $sessionKey = null)
    {
        $mhs = PendaftaranWisuda::all();
        $mhs->each(function($mhs) use ($columns) {
            $mhs->addVisible($columns);
        });
        return $mhs->toArray();
    }
}
