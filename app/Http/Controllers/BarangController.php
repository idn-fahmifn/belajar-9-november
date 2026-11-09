<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    // kumpulan fungsi yang nantinya dipanggil di routing.

    public function halamanUtama()
    {

        $angka1 = 50;
        $angka2 = 100;
        $total = $angka1 + $angka2 / 5;

        return view('barang.index', [
            'barang' => $total,
            'nama' => "Asep"
        ]);
    }

    public function simpan(Request $req)
    {
        return $req;
    }

}
