<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    public function index()
    {
        $data_domain = Domain::latest()->get();

        return view("domain.index", compact("data_domain"));
    }

    public function store(Request $request)
    {
        $request->validate([
            "nama" => "required",
            "keterangan" => "nullable"
        ]);

        Domain::create($request->all());
        flash()->success('Data domain berhasil ditambahkan.');

        return redirect()->back();
    }

    public function update(Domain $domain, Request $request)
    {
        $request->validate([
            "nama" => "required",
            "keterangan" => "nullable"
        ]);

        $domain->update($request->all());
        flash()->success('Data domain berhasil diubah.');

        return redirect()->back();
    }

    public function destroy(Domain $domain)
    {
        $domain->delete();

        flash()->success("Data domain berhasil dihapus.");

        return redirect()->back();
    }
}
