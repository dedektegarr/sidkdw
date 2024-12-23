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
        $data_cb = CagarBudaya::where("level", "nasional")->where("provinsi", "Bengkulu")->get();

        return view("bengkulu.cagar-budaya.nasional.index", compact("data_cb"));
    }
    public function bengkuluProvinsi()
    {
        $data_cb = CagarBudaya::where("level", "provinsi")->where("provinsi", "Bengkulu")->get();

        return view("bengkulu.cagar-budaya.provinsi.index", compact("data_cb"));
    }
    public function bengkuluKota()
    {
        $data_cb = CagarBudaya::where("level", "kabupaten_kota")->where("provinsi", "Bengkulu")->get();

        return view("bengkulu.cagar-budaya.kota.index", compact("data_cb"));
    }
    public function bengkuluOdcb()
    {
        $data_cb = CagarBudaya::where("status_id", 2)->where("provinsi", "Bengkulu")->get();

        return view("bengkulu.cagar-budaya.odcb.index", compact("data_cb"));
    }
    public function lampungNasional()
    {
        $data_cb = CagarBudaya::where("level", "nasional")->where("provinsi", "Lampung")->get();

        return view("lampung.cagar-budaya.nasional.index", compact("data_cb"));
    }
    public function lampungProvinsi()
    {
        $data_cb = CagarBudaya::where("level", "provinsi")->where("provinsi", "Lampung")->get();

        return view("lampung.cagar-budaya.provinsi.index", compact("data_cb"));
    }
    public function lampungKota()
    {
        $data_cb = CagarBudaya::where("level", "kabupaten_kota")->where("provinsi", "Lampung")->get();

        return view("lampung.cagar-budaya.kota.index", compact("data_cb"));
    }
    public function lampungOdcb()
    {
        $data_cb = CagarBudaya::where("status_id", 2)->where("provinsi", "Lampung")->get();

        return view("lampung.cagar-budaya.odcb.index", compact("data_cb"));
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
    public function lampungNasionalCreate()
    {
        $jenis = Jenis::latest()->get();
        $status = Status::latest()->get();

        return view("lampung.cagar-budaya.nasional.create", compact("jenis", "status"));
    }

    public function lampungProvinsiCreate()
    {
        $jenis = Jenis::latest()->get();
        $status = Status::latest()->get();

        return view("lampung.cagar-budaya.provinsi.create", compact("jenis", "status"));
    }
    public function lampungKotaCreate()
    {
        $jenis = Jenis::latest()->get();
        $status = Status::latest()->get();

        return view("lampung.cagar-budaya.kota.create", compact("jenis", "status"));
    }
    public function lampungOdcbCreate()
    {
        $jenis = Jenis::latest()->get();
        $status = Status::latest()->get();

        return view("lampung.cagar-budaya.odcb.create", compact("jenis", "status"));
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
    public function lampungNasionalEdit(CagarBudaya $cb)
    {
        $jenis = Jenis::latest()->get();
        $status = Status::latest()->get();

        return view("lampung.cagar-budaya.nasional.edit", compact("cb", "jenis", "status"));
    }
    public function lampungProvinsiEdit(CagarBudaya $cb)
    {
        $jenis = Jenis::latest()->get();
        $status = Status::latest()->get();

        return view("lampung.cagar-budaya.provinsi.edit", compact("cb", "jenis", "status"));
    }
    public function lampungKotaEdit(CagarBudaya $cb)
    {
        $jenis = Jenis::latest()->get();
        $status = Status::latest()->get();

        return view("lampung.cagar-budaya.kota.edit", compact("cb", "jenis", "status"));
    }
    public function lampungOdcbEdit(CagarBudaya $odcb)
    {
        $jenis = Jenis::latest()->get();
        $status = Status::latest()->get();

        return view("lampung.cagar-budaya.odcb.edit", compact("odcb", "jenis", "status"));
    }

    // CRUD METHOD
    public function store(Request $request)
    {
        CagarBudaya::create($request->all());

        $redirectRoute = null;

        if ($request->level === "nasional" && $request->provinsi === "Bengkulu") {
            $redirectRoute = "bengkulu.cb-nasional";
        } elseif ($request->level === "provinsi" && $request->provinsi === "Bengkulu") {
            $redirectRoute = "bengkulu.cb-provinsi";
        } elseif ($request->level === "kabupaten_kota" && $request->provinsi === "Bengkulu") {
            $redirectRoute = "bengkulu.cb-kabupaten-kota";
        } elseif ($request->provinsi === "Bengkulu") {
            $redirectRoute = "bengkulu.odcb";
        }

        if ($request->level === "nasional" && $request->provinsi === "Lampung") {
            $redirectRoute = "lampung.cb-nasional";
        } elseif ($request->level === "provinsi" && $request->provinsi === "Lampung") {
            $redirectRoute = "lampung.cb-provinsi";
        } elseif ($request->level === "kabupaten_kota" && $request->provinsi === "Lampung") {
            $redirectRoute = "lampung.cb-kabupaten-kota";
        } elseif ($request->provinsi === "Lampung") {
            $redirectRoute = "lampung.odcb";
        }

        flash()->success("Data berhasil ditambahkan.");
        return redirect()->route($redirectRoute);
    }

    public function update(CagarBudaya $cb, Request $request)
    {
        $cb->update($request->all());

        $redirectRoute = null;

        if ($request->level === "nasional" && $request->provinsi === "Bengkulu") {
            $redirectRoute = "bengkulu.cb-nasional";
        } elseif ($request->level === "provinsi" && $request->provinsi === "Bengkulu") {
            $redirectRoute = "bengkulu.cb-provinsi";
        } elseif ($request->level === "kabupaten_kota" && $request->provinsi === "Bengkulu") {
            $redirectRoute = "bengkulu.cb-kabupaten-kota";
        } elseif ($request->provinsi === "Bengkulu") {
            $redirectRoute = "bengkulu.odcb";
        }

        if ($request->level === "nasional" && $request->provinsi === "Lampung") {
            $redirectRoute = "lampung.cb-nasional";
        } elseif ($request->level === "provinsi" && $request->provinsi === "Lampung") {
            $redirectRoute = "lampung.cb-provinsi";
        } elseif ($request->level === "kabupaten_kota" && $request->provinsi === "Lampung") {
            $redirectRoute = "lampung.cb-kabupaten-kota";
        } elseif ($request->provinsi === "Lampung") {
            $redirectRoute = "lampung.odcb";
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
