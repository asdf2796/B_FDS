@extends('layouts.app')

@section('content')
	<h1>Product Detail : ID-{{$product->id}}</h1>
	<dl class="dl-horizontal">
		<dt>Name</dt>
		<dd>{{ $product->name }}</dd>
		<dt>Quantity</dt>
		<dd>{{ $product->qty }} Unit</dd>
		<dt>Price</dt>
		<dd>${{ $product->price }}</dd>
		<dt>Created At</dt>
		<dd>{{ $product->created_at }}</dd>
		<dt>Description</dt>
		<dd>{{ $product->description }}</dd>
	</dl>
	<hr>
	<a class="btn btn-info pull-right" href="/products/{{$product->id}}/edit">Edit Product</a>
@endsection