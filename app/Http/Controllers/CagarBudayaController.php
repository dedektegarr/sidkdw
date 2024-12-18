<?php

namespace App\Http\Controllers;

use App\Models\CagarBudaya;
use App\Models\Jenis;
use App\Models\Status;
use Illuminate\Http\Request;

class CagarBudayaController extends Controller
{
    public function nasional()
    {
        $data_cb = CagarBudaya::latest()->get();

        return view("bengkulu.cagar-budaya.nasional.index", compact("data_cb"));
    }

    public function create()
    {
        $jenis = Jenis::latest()->get();
        $status = Status::latest()->get();

        return view("bengkulu.cagar-budaya.nasional.create", compact("jenis", "status"));
    }

    public function store(Request $request)
    {
        CagarBudaya::create($request->all());

        flash()->success("Data berhasil ditambahkan.");
        return redirect()->route("bengkulu.cb-nasional");
    }
}
