@extends('layout')
@section('content')

<p style="padding-left: 20px;">
	<h4>
	Yay! Your order is successfully placed!	
	</h4>

	Order details:
	@foreach($cartitems as $cartitem)
	{{ $cartitem->product }} <br>
	{{ $cartitem->qty }} <br>
	{{ $cartitem->price }} <br>
	@endforeach

	{{ $total }}
	
	<a href="{{ route('home') }}" class="btn btn-success">
		See All Of Your Orders
	</a>
	<a href="{{ route('order') }}" class="btn btn-warning">
		Continue Shopping
	</a>
	</p>
@endsection