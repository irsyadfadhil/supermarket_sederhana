<br />
<p align="center">
  <h2 align="center">Aplikasi Supermarket Sederhana</h2>
</p>

# Link Untuk DEMO 
```
Halaman Awal http://localhost:8000/ 
Buat Input Produk http://localhost::8000/produk
Halaman Cart http://localhost::8000/shopping_cart 

```


# Install Aplikasi
```
$ composer install
copy file .env.example jadi .env
ubah "DB_DATABASE=laravel" jadi "DB_DATABASE=supermarket_sederhana"
$ php artisan key:generate

```

# Untuk Tes CRUD Gunakan Ini dulu
```
$ php artisan migrate:fresh --seed

```

# Untuk Tes Olah Data
```
import file supermarket_sederhana_muhammadirsyadfadhil.sql

```