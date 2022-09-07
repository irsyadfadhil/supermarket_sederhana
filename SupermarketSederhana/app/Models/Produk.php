<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    protected $fillable = [
    'nama_barang',
    'harga',
    'stok',
    'gambar',
    'kode'];

    // public function product()
    // {
    //     return $this->belongsTo(product::class, 'product_id','id');
    // }
}
