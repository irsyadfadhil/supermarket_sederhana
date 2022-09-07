<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukContoller extends Controller
{

    public function index()
    {
        return view('produk');
    }

    public function store(Request $request)
    {

        $file = $request->file('url_doc');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'gambar_produk';
        $file->move($tujuan_upload,$nama_file);

        $hitung_produk = Produk::count();

        if ( $hitung_produk == '0') {
            $nomor_urut = '1';
        } else {
            $nomor_urut = $hitung_produk;
        }

        $result = substr($request->nama_barang, 0, 2);
        $kode_produk = $result.$nomor_urut;

        $buat_produk = produk::create([
            'nomor_urut' => $nomor_urut,
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => $nama_file,
            'kode' => $kode_produk,

        ]);

        return redirect('/')->with('status', 'Data Created!');
    }

}
