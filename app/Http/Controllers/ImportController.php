<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function cagarBudaya()
    {
        return view("import.cagar-budaya.index");
    }
}
