@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Import Transaction</h1>
  <p>Pastikan file EXCEL yang anda masukkan memiliki judul kolom sebagai berikut : <br>
    <strong>name, mobile, member_address, shipping_address, user_id, kodetrx, member_email, order_email, payment_id, item, total_amount, discount, promo_code</strong><br>
  Seluruh field dalam file excel yang berkorelasi dengan judul kolom diatas harus diubah.
  </p>
  <form class="form-inline" action="postImport" method="post" enctype="multipart/form-data" >
    {{csrf_field()}}
    <div class="form-group">
      <input class="form-control" type="file" name="transaction">
      <input class="btn btn-default" type="submit" value="Import">
    </div>
  </form>
</div>
@endsection
