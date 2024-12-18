<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wbtb extends Model
{
    protected $table = "wbtb";
    protected $guarded = ["id"];

    public function domain()
    {
        return $this->belongsTo(Domain::class, "domain_id");
    }
}
