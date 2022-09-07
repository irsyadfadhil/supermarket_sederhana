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
        $sub_total = $data_produk->harga * 1;

        $buat_shopping = ShoppinCart::create([
            'id_produk' => $data_produk->id_produk,
            'harga' => $data_produk->harga,
            'qty' => 1,
            'subtotal' => $sub_total,

        ]);

        return redirect('/shopping_cart')->with('status', 'Data Created!');
    }

}
