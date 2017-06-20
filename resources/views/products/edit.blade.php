@extends('layouts.app')

@section('content')
	<h1>Edit ID-{{$product->id}}</h1>
	{!! Form::open(['action' => ['ProductsController@update', $product->id], 'method' => 'POST']) !!}
    {{Form::hidden('_method','PUT')}}
    	<div class="form-group">
    		{{Form::label('name','Product Name')}}
    		{{Form::text('name',$product->name, ['class' => 'form-control','placeholder' => 'Name'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('type','Product Type')}}
    		{{Form::text('type',$product->type, ['class' => 'form-control','placeholder' => 'Type'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('qty','Product Quantity')}}
    		{{Form::text('qty',$product->qty, ['class' => 'form-control','placeholder' => 'Quantity'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('price','Product Price')}}
    		{{Form::text('price',$product->price, ['class' => 'form-control','placeholder' => 'Price'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('description','Product Description')}}
    		{{Form::textarea('description',$product->description, ['id' => 'article-ckeditor','class' => 'form-control'])}}
    	</div>
		<div class="form-group col-sm-12 row">
			{{Form::submit('submit', ['class' => 'btn btn-primary'])}}
		</div>
    	
	{!! Form::close() !!}
@endsection