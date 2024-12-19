<?php

namespace App\Imports;

use App\Models\Domain;
use App\Models\Wbtb;
use Maatwebsite\Excel\Concerns\ToModel;

class WbtbImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $domainId = Domain::where("nama", $row[4])->value("id");

        return new Wbtb([
            "domain_id" => $domainId,
            "nama_karya" => $row[2],
            "no_daftar" => $row[1],
            "tahun" => $row[0],
            "sebaran" => $row[3],
            "keterangan" => $row[5],
        ]);
    }
}
