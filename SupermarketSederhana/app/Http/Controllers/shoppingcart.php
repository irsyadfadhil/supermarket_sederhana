<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShoppinCart;
use App\Models\Produk;

class shoppingcart extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shoppingcart = ShoppinCart::with('produk')->get();
        return view('cart', compact('shoppingcart'));
    }


    public function store(Request $request)
    {
        $data_cart = ShoppinCart::where('id_shopping_cart', $request->id_shopping_cart)->first();
        $data_produk = Produk::where('id_produk', $data_cart->id_produk)->first();


        if ($request->status == 'tambah') {

            if ($data_cart->qty >= $data_produk->stok_asli) {
                $jumlah_stok = $data_produk->stok_asli;
                $requestData['stok'] = $jumlah_stok;
                $data_produk->update($requestData);

                $jumlah_qty = $data_produk->stok_asli;
                $jumlah_subtotal = $jumlah_qty * $data_produk->harga ;
                $requestDataCart['qty'] = $jumlah_qty ;
                $requestDataCart['subtotal'] = $jumlah_subtotal;
                $data_cart->update($requestDataCart);
            } else {
                $jumlah_stok = $data_produk->stok - 1;
                $requestData['stok'] = $jumlah_stok;
                $data_produk->update($requestData);

                $jumlah_qty = $data_cart->qty + 1;
                $jumlah_subtotal = $jumlah_qty * $data_produk->harga ;
                $requestDataCart['qty'] = $jumlah_qty ;
                $requestDataCart['subtotal'] = $jumlah_subtotal;
                $data_cart->update($requestDataCart);
            }

        } elseif($request->status == 'kurang') {

            if ($data_cart->qty > $data_produk->stok_asli) {
                $requestData['stok'] = $data_produk->stok_asli;
                $data_produk->update($requestData);

                $jumlah_qty = $data_produk->stok_asli;
                $jumlah_subtotal = $jumlah_qty * $data_produk->harga ;
                $requestDataCart['qty'] = $jumlah_qty ;
                $requestDataCart['subtotal'] = $jumlah_subtotal;
                $data_cart->update($requestDataCart);
            } elseif($data_cart->qty == 0){
            } else{
                $jumlah_stok = $data_produk->stok + 1;
                $requestData['stok'] = $jumlah_stok;
                $data_produk->update($requestData);

                $jumlah_qty = $data_cart->qty - 1;
                $jumlah_subtotal = $jumlah_qty * $data_produk->harga ;
                $requestDataCart['qty'] = $jumlah_qty ;
                $requestDataCart['subtotal'] = $jumlah_subtotal;
                $data_cart->update($requestDataCart);
            }

        } elseif($request->status == 'checkout') {
            ShoppinCart::truncate();
            return redirect('/shopping_cart')->with('status', 'Data Checkouted!');
        }

        return redirect('/shopping_cart')->with('status', 'Data Created!');
    }



}
