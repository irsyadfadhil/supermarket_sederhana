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
    'nomor_urut',
    'nama_barang',
    'harga',
    'stok',
    'stok_asli',
    'gambar',
    'kode',
    'gambar',];

}
