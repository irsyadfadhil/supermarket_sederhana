@extends('template')

@section('main')
  <!-- Product grid -->
  <div class="w3-row w3-grayscale" style="text-align: center;">
    <div class="w3-col s4">
        <h4>Input Produk</h4>
        <form class="needs-validation" action="{{ url('produk') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Nama Barang</label>
          <p><input class="w3-input w3-border" type="text" placeholder="Nama Barang" name="nama_barang" required></p>
        <label>Harga</label>
          <p><input class="w3-input w3-border" type="number" placeholder="Harga" name="harga" required></p>
        <label>Stok</label>
          <p><input class="w3-input w3-border" type="number" placeholder="Stok" name="stok" required></p>
        <label>Gambar</label>
          <p><input class="w3-input w3-border" type="file" class="custom-file-input @error('no_wos') is-invalid @enderror" id="inputGroupFile01" accept=".jpg,.png" name="url_doc" aria-describedby="inputGroupFileAddon01">
          </p>
          {{-- <button type="submit" class="w3-button w3-block w3-black">Send</button> --}}
          <input type="submit" class="btn btn-primary" value="Simpan"/>
        </form>
      </div>
  </div>
  <div>
    <br>
  </div>
@endsection

