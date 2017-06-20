@extends('layouts.app')

@section('content')
	<h1>Check Similarity</h1>
    <hr>
    
	{!! Form::open(['action' => 'customAlgorithmsController@scoring', 'method' => 'POST']) !!}
    	<div class="row">
            <div class="col-md-6">
                <h3>Data One</h3>
                <div class="form-group">
                    <dl class="dl-horizontal">
                        <dt><h5>{{Form::label('memberAddress1','Member Address')}}</h5></dt>
                        <dd>{{Form::text('memberAddress1','', ['class' => 'form-control'])}}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt><h5>{{Form::label('shippingAddress1','Shipping Address')}}</h5></dt>
                        <dd>{{Form::text('shippingAddress1','', ['class' => 'form-control'])}}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt><h5>{{Form::label('paymentID1','Payment ID')}}</h5></dt>
                        <dd>{{Form::text('paymentID1','', ['class' => 'form-control'])}}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt><h5>{{Form::label('mobile1','Mobile')}}</h5></dt>
                        <dd>{{Form::text('mobile1','', ['class' => 'form-control'])}}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt><h5>{{Form::label('oemail1','Order E-mail')}}</h5></dt>
                        <dd>{{Form::text('oemail1','', ['class' => 'form-control'])}}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt><h5>{{Form::label('memail1','Member E-mail')}}</h5></dt>
                        <dd>{{Form::text('memail1','', ['class' => 'form-control'])}}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt><h5>{{Form::label('ip1','IP Address')}}</h5></dt>
                        <dd>{{Form::text('ip1','', ['class' => 'form-control'])}}</dd>
                    </dl>
                </div>
            </div>
            <div class="col-md-6">
                <h3>Data Two</h3>
                <div class="form-group">
                    <dl class="dl-horizontal">
                        <dt><h5>{{Form::label('memberAddress2','Member Address')}}</h5></dt>
                        <dd>{{Form::text('memberAddress2','', ['class' => 'form-control'])}}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt><h5>{{Form::label('shippingAddress2','Shipping Address')}}</h5></dt>
                        <dd>{{Form::text('shippingAddress2','', ['class' => 'form-control'])}}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt><h5>{{Form::label('paymentID2','Payment ID')}}</h5></dt>
                        <dd>{{Form::text('paymentID2','', ['class' => 'form-control'])}}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt><h5>{{Form::label('mobile2','Mobile')}}</h5></dt>
                        <dd>{{Form::text('mobile2','', ['class' => 'form-control'])}}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt><h5>{{Form::label('oemail2','Order E-mail')}}</h5></dt>
                        <dd>{{Form::text('oemail2','', ['class' => 'form-control'])}}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt><h5>{{Form::label('memail2','Member E-mail')}}</h5></dt>
                        <dd>{{Form::text('memail2','', ['class' => 'form-control'])}}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt><h5>{{Form::label('ip2','IP Address')}}</h5></dt>
                        <dd>{{Form::text('ip2','', ['class' => 'form-control'])}}</dd>
                    </dl>
                </div>
            </div>
        </div>    
		<div class="form-group col-sm-12 row">
			{{Form::submit('Process', ['class' => 'btn btn-primary btn-block'])}}
		</div>
    	
	{!! Form::close() !!}
@endsection