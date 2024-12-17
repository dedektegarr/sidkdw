<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $data_status = Status::latest()->get();

        return view("status.index", compact("data_status"));
    }

    public function store(Request $request)
    {
        $request->validate([
            "nama" => "required",
            "keterangan" => "nullable"
        ]);

        Status::create($request->all());
        flash()->success('Data status berhasil ditambahkan.');

        return redirect()->back();
    }

    public function update(Status $status, Request $request)
    {
        $request->validate([
            "nama" => "required",
            "keterangan" => "nullable"
        ]);

        $status->update($request->all());
        flash()->success('Data status berhasil diubah.');

        return redirect()->back();
    }

    public function destroy(Status $status)
    {
        $status->delete();

        flash()->success("Data status berhasil dihapus.");

        return redirect()->back();
    }
}
