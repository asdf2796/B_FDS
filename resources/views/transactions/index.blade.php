@extends('layouts.app')

@section('content')
	<h1>Index of Transaction</h1>
	@if(count($transactions) > 0)
		<div>
			<table class="table table-hover table-condensed" style="font-size: 10px;">
				<tr>
					<th>ID</th>
					<th>User ID</th>
					<th>Transaction Code</th>
					<th>Name</th>
					<th>Mobile Phone</th>
					<th>Member Address</th>
					<th>Shipping Address</th>
					<th>Member Email</th>
					<th>Order Email</th>
					<th>Payment ID</th>
					<th>Keterangan</th>
				</tr>
				@foreach($transactions as $transaction)
					<tr>
						<td>{{ $transaction->id }}</td>
						<td>{{ $transaction->user_id }}</td>
						<td>{{ $transaction->kodetrx }}</td>
						<td>{{ $transaction->name }}</td>
						<td>{{ $transaction->mobile }}</td>
						<td>{{ $transaction->member_address }}</td>
						<td>{{ $transaction->shipping_address }}</td>
						<td>{{ $transaction->member_email }}</td>
						<td>{{ $transaction->order_email }}</td>
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
@endsection