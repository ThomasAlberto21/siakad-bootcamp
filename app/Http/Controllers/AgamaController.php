<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agama;

class AgamaController extends Controller
{
    public function index()
    {
        $agama = Agama::all();
        return view('agama.index', compact('agama'));
    }

    public function add()
    {
        return view('agama.create');
    }

    public function simpan(Request $req)
    {
        Agama::create([
            'nama_agama' => $req->nama_agama
        ]);
        return redirect('/agama');
    }
}
