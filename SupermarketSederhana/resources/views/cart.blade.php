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

