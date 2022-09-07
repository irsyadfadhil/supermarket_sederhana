@extends('template')

@section('main')
  <!-- Product grid -->
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
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
                    <form class="needs-validation" action="{{ url('/shopping_cart') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="id_shopping_cart" name="id_shopping_cart" value="{{ $value->id_shopping_cart}}">
                        <input type="hidden" id="status" name="status" value="tambah">
                        <input type="submit" class="btn btn-primary" value="Tambah"/>
                    </form>
                    <form class="needs-validation" action="{{ url('/shopping_cart') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="id_shopping_cart" name="id_shopping_cart" value="{{ $value->id_shopping_cart}}">
                        <input type="hidden" id="status" name="status" value="kurang">
                        <input type="submit" class="btn btn-primary" value="Kurang"/>
                    </form>
                </td>
            </tr>
        @endforeach
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                @if(empty($value))

                @else
                <form class="needs-validation" action="{{ url('/shopping_cart') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                        <input type="hidden" id="id_shopping_cart" name="id_shopping_cart" value="{{ $value->id_shopping_cart}}">

                    <input type="hidden" id="status" name="status" value="checkout">
                    <input type="submit" class="btn btn-primary" value="Check Out"/>
                </form>
                @endif
            </td>
        </tr>
    </table>
  </div>
@endsection

