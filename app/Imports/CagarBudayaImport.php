<?php

namespace App\Imports;

use App\Models\CagarBudaya;
use App\Models\Jenis;
use App\Models\Status;
use Maatwebsite\Excel\Concerns\ToModel;

class CagarBudayaImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $jenisId = Jenis::where("nama", $row[1])->value("id");
        $statusId = Status::where("nama", $row[2])->value("id");

        return new CagarBudaya([
            "jenis_id" => $jenisId,
            "status_id" => $statusId,
            "nama_objek" => $row[0],
            "sk_penetapan" => $row[3],
            "desa_kelurahan" => $row[4],
            "kecamatan" => $row[5],
            "kabupaten_kota" => $row[6],
            "provinsi" => $row[7],
            "level" => "nasional"
        ]);
    }
}
