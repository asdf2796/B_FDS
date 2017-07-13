@extends('layouts.app')

@section('title')
FDS - Transactions
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h1>Index of Transaction</h1>
		</div>
		@if(count($transactions) > 0)
		<div class="col-md-8 text-right">
			@if(count($promo_codes) > 0)
			<div class="col-md-4 pull-right"  style="margin-top:20px;">
				<select class="form-control" onchange="document.location.href=this.value">
						<option value="#" disabled selected hidden>Select Promo Code</option>
					@foreach($promo_codes as $promo_code)
						<option value="/transactions/promo/{{ $promo_code->promo_code }}">{{ $promo_code->promo_code }}</option>
					@endforeach
				</select>
			</div>
			@endif
			<a id="load" class="btn btn-success btn-md" href="/transactions/process" style="margin-top:20px;">Process</a>
			<a id="load" class="btn btn-info btn-md" href="/transactions/download" style="margin-top:20px;">Export</a>
			<a id="load" class="btn btn-danger btn-md" href="/transactions/delete_all" style="margin-top:20px;">Delete All</a>
		</div>
		@endif
	</div>
	@if(count($transactions) > 0)
		<div>
			<table class="table table-bordered" style="font-size: 10px;">
				<tr style="background-color: #b3d8e0;">
					<th>No</th>
					<th>ID</th>
					<th>
						<a href="/transactions/sortBy/userId" style="color:#636B6F;">
						<div class="row">
							<div class="col-sm-9">User ID</div>
							<div class="col-sm-2"><i class="fa fa-sort" aria-hidden="true"></i></div>
						</div>
						</a>
					</th>
					<th>Transaction Code</th>
					<th>
						<a href="/transactions/sortBy/name" style="color:#636B6F;">
						<div class="row">
							<div class="col-sm-9">Name</div>
							<div class="col-sm-2 text-right"><i class="fa fa-sort" aria-hidden="true"></i></div>
						</div>
						</a>
					</th>
					<th>Total Amount</th>
					<th>Discount</th>
					<th>
						<a href="/transactions/sortBy/promoCode" style="color:#636B6F;">
						<div class="row">
							<div class="col-sm-9">Promo Code</div>
							<div class="col-sm-2"><i class="fa fa-sort" aria-hidden="true"></i></div>
						</div>
						</a>
					</th>
					<th>Payment ID</th>
					<th>Keterangan</th>
				</tr>
				@foreach($transactions as $transaction)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $transaction->id }}</td>
						<td>{{ $transaction->user_id }}</td>
						<td>{{ $transaction->kodetrx }}</td>
						<td>{{ $transaction->name }}</td>
						<td>Rp. {{ number_format($transaction->total_amount) }}</td>
						<td>Rp. {{ number_format($transaction->discount) }}</td>
						<td>{{ $transaction->promo_code }}</td>
						<td>{{ $transaction->payment_id }}</td>
						<td class="text-center">{{ $transaction->keterangan }}</td>
					</tr>
				@endforeach
			</table>
			{{ $transactions->links() }}
		</div>
	@else
		<p>No Transactions Available</p>
	@endif
</div>
@endsection
