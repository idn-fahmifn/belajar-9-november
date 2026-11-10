<?php

namespace App\Http\Controllers;

use App\Http\Requests\BarangRequest;

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

    public function simpan(BarangRequest $req)
    {
        $req->validated();
        
        return $req;
    }

}
