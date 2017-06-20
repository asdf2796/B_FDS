@extends('layouts.app')

@section('content')
	<h1>Create a Product</h1>
	{!! Form::open(['action' => 'ProductsController@store', 'method' => 'POST']) !!}
    	<div class="form-group">
    		{{Form::label('name','Product Name')}}
    		{{Form::text('name','', ['class' => 'form-control','placeholder' => 'Name'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('type','Product Type')}}
    		{{Form::text('type','', ['class' => 'form-control','placeholder' => 'Type'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('qty','Product Quantity')}}
    		{{Form::text('qty','', ['class' => 'form-control','placeholder' => 'Quantity'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('price','Product Price')}}
    		{{Form::text('price','', ['class' => 'form-control','placeholder' => 'Price'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('description','Product Description')}}
    		{{Form::textarea('description','', ['id' => 'article-ckeditor','class' => 'form-control'])}}
    	</div>
		<div class="form-group col-sm-12 row">
			{{Form::submit('submit', ['class' => 'btn btn-primary'])}}
		</div>
    	
	{!! Form::close() !!}
@endsection