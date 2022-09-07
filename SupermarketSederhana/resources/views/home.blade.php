@extends('template')

@section('main')
  <!-- Product grid -->
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
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        @endforeach

    </table>
  </div>
@endsection

