<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function perkenalan()
    {
        echo "<h1>Perkenalan</h1>";
        echo "Saya Framework Laravel";
    }

    public function hello()
    {
        return view("contoh");
    }

    public function persegi()
    {
        $dataPersegi = [
            'nama' => 'Persegi Panjang',
            'panjang' => 8,
            'lebar' => 4,
        ];

        return view('bangun.persegi', $dataPersegi);
    }
}
