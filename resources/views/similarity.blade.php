@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Check Similarity</h1>
	{!! Form::open(['action' => 'customAlgorithmsController@scoring', 'method' => 'POST', 'class' => 'form-horizontal' ]) !!}
    	<div class="row">
						<!-- Data One -->
						<div class="col-md-6 text-center">
                <h3>Data One</h3>
                <div class="form-group">
										{{Form::label('memberAddress1','Member Address', ['class' => 'control-label col-sm-3'])}}
										<div class="col-sm-9">
											{{Form::text('memberAddress1','Jl. Diponegoro no: 1', ['class' => 'form-control'])}}
										</div>
								</div>
                <div class="form-group">
										{{Form::label('shippingAddress1','Shipping Address', ['class' => 'control-label col-sm-3'])}}
										<div class="col-sm-9">
											{{Form::text('shippingAddress1','Jl. Diponegoro no: 1', ['class' => 'form-control'])}}
										</div>
								</div>
                <div class="form-group">
										{{Form::label('paymentID1','Payment ID', ['class' => 'control-label col-sm-3'])}}
										<div class="col-sm-9">
											{{Form::text('paymentID1','437451**5211', ['class' => 'form-control'])}}
										</div>
								</div>
                <div class="form-group">
										{{Form::label('mobile1','Mobile', ['class' => 'control-label col-sm-3'])}}
										<div class="col-sm-9">
											{{Form::text('mobile1','0811200756', ['class' => 'form-control'])}}
										</div>
								</div>
                <div class="form-group">
										{{Form::label('memail1','Member E-mail', ['class' => 'control-label col-sm-3'])}}
										<div class="col-sm-9">
											{{Form::text('memail1','malim269@hotmail.com', ['class' => 'form-control'])}}
										</div>
								</div>
                <div class="form-group">
										{{Form::label('oemail1','Order E-mail', ['class' => 'control-label col-sm-3'])}}
										<div class="col-sm-9">
											{{Form::text('oemail1','malim269@hotmail.com', ['class' => 'form-control'])}}
										</div>
								</div>
            </div>

						<!-- Data Two -->
						<div class="col-md-6 text-center">
                <h3>Data Two</h3>
                <div class="form-group">
										{{Form::label('memberAddress2','Member Address', ['class' => 'control-label col-sm-3'])}}
										<div class="col-sm-9">
											{{Form::text('memberAddress2','Taman Duta Mas CIB / 4', ['class' => 'form-control'])}}
										</div>
								</div>
                <div class="form-group">
										{{Form::label('shippingAddress2','Shipping Address', ['class' => 'control-label col-sm-3'])}}
										<div class="col-sm-9">
											{{Form::text('shippingAddress2','Metro Jewelry Gd. Cikini Gold Center Lt. LG 029 Jl. Pegangsaan Timur 9', ['class' => 'form-control'])}}
										</div>
								</div>
                <div class="form-group">
										{{Form::label('paymentID2','Payment ID', ['class' => 'control-label col-sm-3'])}}
										<div class="col-sm-9">
											{{Form::text('paymentID2','415735xxxxxx0074', ['class' => 'form-control'])}}
										</div>
								</div>
                <div class="form-group">
										{{Form::label('mobile2','Mobile', ['class' => 'control-label col-sm-3'])}}
										<div class="col-sm-9">
											{{Form::text('mobile2','08159660230', ['class' => 'form-control'])}}
										</div>
								</div>
                <div class="form-group">
										{{Form::label('memail2','Member E-mail', ['class' => 'control-label col-sm-3'])}}
										<div class="col-sm-9">
											{{Form::text('memail2','ikj83@yahoo.com', ['class' => 'form-control'])}}
										</div>
								</div>
                <div class="form-group">
										{{Form::label('oemail2','Order E-mail', ['class' => 'control-label col-sm-3'])}}
										<div class="col-sm-9">
											{{Form::text('oemail2','ikj83@yahoo.com', ['class' => 'form-control'])}}
										</div>
								</div>
            </div>
        </div>
				<div class="form-group">
					<div class="col-sm-12">
						{{Form::submit('Process', ['class' => 'btn btn-info btn-block','id' => 'load'])}}
					</div>
				</div>
	{!! Form::close() !!}

</div>
@endsection
