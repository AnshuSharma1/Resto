@extends('layout')
@section('content')
<br>
<h4 style="padding-left: 50px;">
	Yay! Your order is successfully placed!	
</h4>

<div style="padding-left: 50px;">
	Order details:
	<ul>
	@foreach($cartitems as $cartitem)
	 <li>PRODUCT : {{ $cartitem->product }}</li>
	<li>QUANTITY : {{ $cartitem->qty }}</li>
	<li>PRICE : {{ $cartitem->price }}</li>
	@endforeach
	</ul>

	<span>TOTAL : {{ $total }}</span>
	<br>
	<a href="{{ route('home') }}" class="btn btn-success">
		See All Of Your Orders
	</a>
	<a href="{{ route('order') }}" class="btn btn-warning">
		Continue Shopping
	</a>
</div>
@endsection