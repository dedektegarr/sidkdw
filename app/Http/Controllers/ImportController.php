<?php

namespace App\Http\Controllers;

use App\Imports\CagarBudayaImport;
use App\Imports\WbtbImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function cagarBudaya()
    {
        return view("import.cagar-budaya.index");
    }

    public function cagarBudayaUpload(Request $request)
    {
        $request->validate([
            "file" => "required|file|mimes:xlsx,xls,csv|max:2048"
        ]);

        Excel::import(new CagarBudayaImport, $request->file);

        flash()->success("Data berhasil di import");
        return redirect()->back();
    }

    public function wbtb()
    {
        return view("import.wbtb.index");
    }

    public function wbtbUpload(Request $request)
    {
        $request->validate([
            "file" => "required|file|mimes:xlsx,xls,csv|max:2048"
        ]);

        Excel::import(new WbtbImport, $request->file);

        flash()->success("Data berhasil di import");
        return redirect()->back();
    }
}
