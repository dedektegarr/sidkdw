<?php

namespace App\Exports;

use App\Models\Wbtb;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class WbtbExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        return view('laporan.export.wbtb', [
            'wbtb' => Wbtb::latest()->filter(request(["domain", "sebaran", "tahun"]))->get()
        ]);
    }
}
