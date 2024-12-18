<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CagarBudaya extends Model
{
    protected $table = "cagar_budaya";
    protected $guarded = ['id'];

    public function jenis()
    {
        return $this->belongsTo(Jenis::class, "jenis_id");
    }

    public function status()
    {
        return $this->belongsTo(Status::class, "status_id");
    }
}
