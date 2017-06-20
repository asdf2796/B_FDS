@extends('layouts.app')

@section('content')
	<h1>This is The Product Page of The Website</h1>
	@if(count($products) > 0)
		<div>
			<table class="table table-hover">
				<tr>
					<th>Nama Produk</th>
					<th>Kuantitas</th>
					<th>Harga</th>
					<th>Action</th>
				</tr>
				@foreach($products as $product)
					<tr>
						<td><a href="/products/{{$product->id}}">{{ $product->name }}</a></td>
						<td>{{ $product->qty }} unit</td>
						<td>${{ $product->price }}</td>
						<td>
							{!!Form::open(['action' => ['ProductsController@destroy', $product->id], 'method' => 'POST'])!!}
								{{Form::hidden('_method','DELETE')}}
								{{Form::submit('Delete', ['class' => 'btn btn-danger btn-xs'])}}
							{!!Form::close()!!}
						</td>
					</tr>
				@endforeach				
			</table>
			{{ $products->links() }}
		</div>
	@else
		<p>No Products Available</p>
	@endif
@endsection