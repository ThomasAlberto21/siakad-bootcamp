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

    public function hapus($id)
    {
        Agama::destroy($id);
        return redirect('/agama')->with('success', 'Data berhasil dihapus');
    }

    public function edit($id)
    {
        $agama = Agama::find($id);
        return view('agama.edit', compact('agama'));
    }

    public function update(Request $req, $id)
    {
        $agama = Agama::find($id);
        $agama->update([
            'nama_agama' => $req->nama_agama
        ]);
        return redirect('/agama')->with('success', 'Data berhasil diupdate');
    }
}
