<?php

namespace App\Http\Controllers;

use App\Models\CagarBudaya;
use App\Models\Jenis;
use App\Models\Status;
use Illuminate\Http\Request;

class CagarBudayaController extends Controller
{
    // INDEX
    public function bengkuluNasional()
    {
        $data_cb = CagarBudaya::where("level", "nasional")->get();

        return view("bengkulu.cagar-budaya.nasional.index", compact("data_cb"));
    }
    public function bengkuluProvinsi()
    {
        $data_cb = CagarBudaya::where("level", "provinsi")->get();

        return view("bengkulu.cagar-budaya.provinsi.index", compact("data_cb"));
    }
    public function bengkuluKota()
    {
        $data_cb = CagarBudaya::where("level", "kabupaten_kota")->get();

        return view("bengkulu.cagar-budaya.kota.index", compact("data_cb"));
    }
    public function bengkuluOdcb()
    {
        $data_cb = CagarBudaya::where("status_id", 2)->get();

        return view("bengkulu.cagar-budaya.odcb.index", compact("data_cb"));
    }

    // CREATE
    public function bengkuluNasionalCreate()
    {
        $jenis = Jenis::latest()->get();
        $status = Status::latest()->get();

        return view("bengkulu.cagar-budaya.nasional.create", compact("jenis", "status"));
    }

    public function bengkuluProvinsiCreate()
    {
        $jenis = Jenis::latest()->get();
        $status = Status::latest()->get();

        return view("bengkulu.cagar-budaya.provinsi.create", compact("jenis", "status"));
    }
    public function bengkuluKotaCreate()
    {
        $jenis = Jenis::latest()->get();
        $status = Status::latest()->get();

        return view("bengkulu.cagar-budaya.kota.create", compact("jenis", "status"));
    }
    public function bengkuluOdcbCreate()
    {
        $jenis = Jenis::latest()->get();
        $status = Status::latest()->get();

        return view("bengkulu.cagar-budaya.odcb.create", compact("jenis", "status"));
    }

    // EDIT
    public function bengkuluNasionalEdit(CagarBudaya $cb)
    {
        $jenis = Jenis::latest()->get();
        $status = Status::latest()->get();

        return view("bengkulu.cagar-budaya.nasional.edit", compact("cb", "jenis", "status"));
    }
    public function bengkuluProvinsiEdit(CagarBudaya $cb)
    {
        $jenis = Jenis::latest()->get();
        $status = Status::latest()->get();

        return view("bengkulu.cagar-budaya.provinsi.edit", compact("cb", "jenis", "status"));
    }
    public function bengkuluKotaEdit(CagarBudaya $cb)
    {
        $jenis = Jenis::latest()->get();
        $status = Status::latest()->get();

        return view("bengkulu.cagar-budaya.kota.edit", compact("cb", "jenis", "status"));
    }
    public function bengkuluOdcbEdit(CagarBudaya $odcb)
    {
        $jenis = Jenis::latest()->get();
        $status = Status::latest()->get();

        return view("bengkulu.cagar-budaya.odcb.edit", compact("odcb", "jenis", "status"));
    }

    // CRUD METHOD
    public function store(Request $request)
    {
        CagarBudaya::create($request->all());

        $redirectRoute = "bengkulu.cb-nasional";

        if ($request->level === "provinsi") {
            $redirectRoute = "bengkulu.cb-provinsi";
        } elseif ($request->level === "kabupaten_kota") {
            $redirectRoute = "bengkulu.cb-kabupaten-kota";
        } else {
            $redirectRoute = "bengkulu.odcb";
        }

        flash()->success("Data berhasil ditambahkan.");
        return redirect()->route($redirectRoute);
    }

    public function update(CagarBudaya $cb, Request $request)
    {
        $cb->update($request->all());

        $redirectRoute = "bengkulu.cb-nasional";

        if ($request->level === "provinsi") {
            $redirectRoute = "bengkulu.cb-provinsi";
        } elseif ($request->level === "kabupaten_kota") {
            $redirectRoute = "bengkulu.cb-kabupaten-kota";
        } else {
            $redirectRoute = "bengkulu.odcb";
        }

        flash()->success("Data berhasil diubah.");
        return redirect()->route($redirectRoute);
    }

    public function destroy(CagarBudaya $cb)
    {
        $cb->delete();

        flash()->success("Data berhasil dihapus.");
        return redirect()->back();
    }
}
