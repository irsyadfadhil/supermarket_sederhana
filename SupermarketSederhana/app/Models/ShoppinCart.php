<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppinCart extends Model
{
    use HasFactory;
    protected $table = 'shopping_cart';
    protected $primaryKey = 'id_shopping_cart';
    protected $fillable = [
    'id_produk',
    'harga',
    'qty',
    'subtotal'];

    public function produk()
    {
        return $this->belongsTo(produk::class, 'id_produk','id_produk');
    }
}
