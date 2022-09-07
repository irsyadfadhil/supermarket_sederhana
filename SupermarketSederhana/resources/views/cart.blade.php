@extends('template')

@section('main')
  <!-- Product grid -->
  <div class="w3-row w3-grayscale">
    <table>
        <tr>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Qty</th>
            <th>Subtotal</th>
            <th>Action</th>
        </tr>
        @foreach($shoppingcart as $key => $value)
            <tr>
                <td>{{ $value->produk->nama_barang}}</td>
                <td>{{ $value->harga}}</td>
                <td>{{ $value->qty}}</td>
                <td>{{ $value->subtotal}}</td>
                <td>
                    <form class="needs-validation" action="{{ url('/') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="kode" name="kode" value="{{ $value->kode}}">
                        <input type="submit" class="btn btn-primary" value="Tambah"/>
                    </form>
                    <form class="needs-validation" action="{{ url('/') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="kode" name="kode" value="{{ $value->kode}}">
                        <input type="submit" class="btn btn-primary" value="Kurang"/>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
  </div>
@endsection

