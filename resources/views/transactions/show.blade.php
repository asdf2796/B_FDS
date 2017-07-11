@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3>Transaction Details, ID-{{$transaction->id}}</h3><br>
    </div>
  </div>
  <div class="row">
    <dl class="dl-horizontal">
      <dt>USER ID</dt>
      <dd>{{$transaction->user_id}}</dd>
      <dt>Transaction Code</dt>
      <dd>{{$transaction->kodetrx}}</dd>
      <dt>Full Name</dt>
      <dd>{{$transaction->name}}</dd>
      <dt>Mobile</dt>
      <dd>{{$transaction->mobile}}</dd>
      <dt>Member E-mail</dt>
      <dd>{{$transaction->member_email}}</dd>
      <dt>Order E-mail</dt>
      <dd>{{$transaction->order_email}}</dd>
      <dt>Member Address</dt>
      <dd>{{$transaction->member_address}}</dd>
      <dt>Shipping Address</dt>
      <dd>{{$transaction->shipping_address}}</dd>
      <dt>Payment ID</dt>
      <dd>{{$transaction->payment_id}}</dd>
      <dt>Item</dt>
      <dd>{{$transaction->item}}</dd>
      <dt>Total Amount</dt>
      <dd>Rp. {{number_format($transaction->total_amount)}}</dd>
      <dt>Discount</dt>
      <dd>Rp. {{number_format($transaction->discount)}}</dd>
      <dt>Promo Code</dt>
      <dd>{{$transaction->promo_code}}</dd>
      <dt>Keterangan</dt>
      <dd>{{$transaction->keterangan}}</dd>
    </dl>
  </div>
</div>
@endsection
