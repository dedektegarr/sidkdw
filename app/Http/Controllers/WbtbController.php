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
    public function bengkuluOpk()
    {
        $data_opk = Wbtb::where("no_daftar", null)->where("sebaran", "Bengkulu")->get();

        return view("bengkulu.opk.index", compact("data_opk"));
    }

    // CREATE
    public function bengkuluWbtbCreate()
    {
        $domain = Domain::latest()->get();

        return view("bengkulu.wbtb.create", compact("domain"));
    }
    public function bengkuluOpkCreate()
    {
        $domain = Domain::latest()->get();

        return view("bengkulu.opk.create", compact("domain"));
    }

    // EDIT
    public function bengkuluWbtbEdit(Wbtb $wbtb)
    {
        $domain = Domain::latest()->get();

        return view("bengkulu.wbtb.edit", compact("wbtb", "domain"));
    }
    public function bengkuluOpkEdit(Wbtb $opk)
    {
        $domain = Domain::latest()->get();

        return view("bengkulu.opk.edit", compact("opk", "domain"));
    }

    // CRUD METHOD
    public function store(Request $request)
    {
        Wbtb::create($request->all());

        $redirectPath = "bengkulu.wbtb";

        if ($request->page === "opk") {
            $redirectPath = "bengkulu.opk";
        }

        flash()->success("Data berhasil ditambahkan.");
        return redirect()->route($redirectPath);
    }

    public function update(Wbtb $wbtb, Request $request)
    {
        $wbtb->update($request->all());

        $redirectPath = "bengkulu.wbtb";

        if ($request->page === "opk") {
            $redirectPath = "bengkulu.opk";
        }

        flash()->success("Data berhasil ditambahkan.");
        return redirect()->route($redirectPath);
    }

    public function destroy(Wbtb $wbtb)
    {
        $wbtb->delete();

        flash()->success("Data berhasil dihapus.");
        return redirect()->back();
    }
}
