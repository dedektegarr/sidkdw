<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CagarBudaya extends Model
{
    protected $table = "cagar_budaya";
    protected $guarded = ['id'];

    public function scopeFilter($query, $filters)
    {
        $query->when($filters["jenis"] ?? false, function ($query, $jenis) {
            return $query->where("jenis_id", $jenis);
        });

        $query->when($filters["status"] ?? false, function ($query, $status) {
            return $query->where("status_id", $status);
        });

        $query->when($filters["provinsi"] ?? false, function ($query, $provinsi) {
            return $query->where("provinsi", $provinsi);
        });
    }

    public function jenis()
    {
        return $this->belongsTo(Jenis::class, "jenis_id");
    }

    public function status()
    {
        return $this->belongsTo(Status::class, "status_id");
    }
}
