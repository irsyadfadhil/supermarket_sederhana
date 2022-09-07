<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\ShoppinCart;

class Home extends Controller
{

    public function index()
    {
        $produk = Produk::limit(10)->get();
        return view('home', compact('produk'));
    }


    public function store(Request $request)
    {
        $data_produk = Produk::where('kode', $request->kode)->first();
        $cek_produk_di_cart = ShoppinCart::where('id_produk', $data_produk->id_produk)->first();
        if (empty($cek_produk_di_cart)) {
            $sub_total = $data_produk->harga * 1;
            $jumlah_stok = $data_produk->stok - 1;

            $requestData['stok'] = $jumlah_stok;
            $data_produk->update($requestData);

            $buat_shopping = ShoppinCart::create([
                'id_produk' => $data_produk->id_produk,
                'harga' => $data_produk->harga,
                'qty' => 1,
                'subtotal' => $sub_total,

            ]);
        } else {
            // return redirect('/shopping_cart')->with('status', 'Data Created!');
            return redirect('/shopping_cart')->with('success', 'Sudah Ada Di Keranjang');
        }




        return redirect('/shopping_cart')->with('status', 'Data Created!');
    }

}
