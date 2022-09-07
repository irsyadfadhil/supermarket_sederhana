<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Produk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id('id_produk');
            $table->integer('nomor_urut')->nullable();
            $table->string('nama_barang')->nullable();
            $table->integer('harga')->nullable();
            $table->integer('stok')->nullable();
            $table->integer('stok_asli')->nullable();
            $table->string('gambar')->nullable();
            $table->string('kode')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
}
