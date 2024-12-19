<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wbtb extends Model
{
    protected $table = "wbtb";
    protected $guarded = ["id"];

    public function scopeFilter($query, $filters)
    {
        $query->when($filters["domain"] ?? false, function ($query, $domain) {
            return $query->where("domain_id", $domain);
        });

        $query->when($filters["tahun"] ?? false, function ($query, $tahun) {
            return $query->where("tahun", $tahun);
        });

        $query->when($filters["sebaran"] ?? false, function ($query, $sebaran) {
            return $query->where("sebaran", $sebaran);
        });
    }

    public function domain()
    {
        return $this->belongsTo(Domain::class, "domain_id");
    }
}
