<?php

namespace App\Exports;

use App\Models\CagarBudaya;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class CagarBudayaExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        return view('laporan.export.cb', [
            'cb' => CagarBudaya::latest()->filter(request(["jenis", "status", "provinsi"]))->get()
        ]);
    }
}
