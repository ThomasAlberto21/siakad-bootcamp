<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BalokController extends Controller
{
    public function index()
    {
        return view('balok.index');
    }

    public function volume(Request $req)
    {
        $pjg = $req->panjang;
        $lbr = $req->lebar;
        $tgg = $req->tinggi;
        $vol = $pjg * $lbr * $tgg;
        echo "Volume Balok = $vol";
    }
}
