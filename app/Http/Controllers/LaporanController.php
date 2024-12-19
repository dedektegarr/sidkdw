<?php

namespace App\Http\Controllers;

use App\Exports\CagarBudayaExport;
use App\Exports\WbtbExport;
use App\Models\CagarBudaya;
use App\Models\Domain;
use App\Models\Jenis;
use App\Models\Status;
use App\Models\Wbtb;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LaporanController extends Controller
{
    public function laporanCb()
    {
        $cb = CagarBudaya::latest()->filter(request(["jenis", "status", "provinsi"]))->get();
        $jenis = Jenis::all();
        $status = Status::all();
        $provinsi = ["Bengkulu", "Lampung"];

        return view("laporan.cagar-budaya.index", compact("cb", "jenis", "status", "provinsi"));
    }

    public function laporanWbtb()
    {
        $wbtb = Wbtb::latest()->filter(request(["domain", "tahun", "sebaran"]))->get();
        $domain = Domain::all();
        $sebaran = ["Bengkulu", "Lampung"];

        return view("laporan.wbtb.index", compact("wbtb", "domain", "sebaran"));
    }

    public function laporanCbExport()
    {
        return Excel::download(new CagarBudayaExport, 'cb_odcb.xlsx');
    }

    public function laporanWbtbExport()
    {
        return Excel::download(new WbtbExport, 'wbtb.xlsx');
    }
}
