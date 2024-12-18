<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Wbtb;
use Illuminate\Http\Request;

class WbtbController extends Controller
{
    // INDEX
    public function bengkuluWbtb()
    {
        $data_wbtb = Wbtb::where("no_daftar", "!=", null)->where("sebaran", "Bengkulu")->get();

        return view("bengkulu.wbtb.index", compact("data_wbtb"));
    }

    // CREATE
    public function bengkuluWbtbCreate()
    {
        $domain = Domain::latest()->get();

        return view("bengkulu.wbtb.create", compact("domain"));
    }

    // EDIT
    public function bengkuluWbtbEdit(Wbtb $wbtb)
    {
        $domain = Domain::latest()->get();

        return view("bengkulu.wbtb.edit", compact("wbtb", "domain"));
    }

    // CRUD METHOD
    public function store(Request $request)
    {
        Wbtb::create($request->all());

        flash()->success("Data berhasil ditambahkan.");
        return redirect()->route("bengkulu.wbtb");
    }

    public function update(Wbtb $wbtb, Request $request)
    {
        $wbtb->update($request->all());

        flash()->success("Data berhasil ditambahkan.");
        return redirect()->route("bengkulu.wbtb");
    }

    public function destroy(Wbtb $wbtb)
    {
        $wbtb->delete();

        flash()->success("Data berhasil dihapus.");
        return redirect()->back();
    }
}
