<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    public function index()
    {
        $data_jenis = Jenis::latest()->get();

        return view("jenis.index", compact("data_jenis"));
    }

    public function store(Request $request)
    {
        $request->validate([
            "nama" => "required",
            "keterangan" => "nullable"
        ]);

        Jenis::create($request->all());
        flash()->success('Data jenis berhasil ditambahkan.');

        return redirect()->back();
    }

    public function update(Jenis $jenis, Request $request)
    {
        $request->validate([
            "nama" => "required",
            "keterangan" => "nullable"
        ]);

        $jenis->update($request->all());
        flash()->success('Data jenis berhasil diubah.');

        return redirect()->back();
    }

    public function destroy(Jenis $jenis)
    {
        $jenis->delete();

        flash()->success("Data jenis berhasil dihapus.");

        return redirect()->back();
    }
}
