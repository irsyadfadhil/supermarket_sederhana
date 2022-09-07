@extends('template')

@section('main')
  <!-- Product grid -->

  <div class="w3-row w3-grayscale" style="text-align: center">
    <p>SELAMAT DATANG </p>
  </div>

  <div class="w3-row w3-grayscale">
    <table>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Gambar</th>
            <th>Kode</th>
            <th>Action</th>
        </tr>
        @foreach($produk as $key => $value)
            <tr>
                <td>{{ $value->nomor_urut}}</td>
                <td>{{ $value->nama_barang}}</td>
                <td>Rp.{{ $value->harga}}</td>
                <td>{{ $value->stok}}</td>
                <td style="text-align: center"><img src="/gambar_produk/{{ $value->gambar}}" height="150px" width="300px" /></td>
                <td>{{ $value->kode}}</td>
                <td>
                    <form class="needs-validation" action="{{ url('/') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="kode" name="kode" value="{{ $value->kode}}">
                        <input type="submit" class="btn btn-primary" value="Beli"/>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
  </div>
@endsection

