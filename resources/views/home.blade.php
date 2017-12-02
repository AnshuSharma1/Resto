@extends('layout')

@section('content')
<div class="container" style="padding: 30px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">USER Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in  as a user!

                    <p>

                    @foreach($orders as $order)

                    NAME : {{ $order->name }}
                    <br>
                    ADDRESS : {{ $order->address }}
                    <br>
                    PHONE : {{ $order->phone }}
                    <br>
                    SUBTOTAL : {{ $order->subtotal }}
                    <br>
                    TAX : {{ $order->tax }}
                    <br>
                    TOTAL : {{ $order->total }}
                    <br>
                    <hr>
                        @foreach($order->cart as $item)

                        PRODUCT : {{ $item['product'] }} <br>
                        QUANTITY : {{ $item['qty'] }} <br>
                        PRICE  : {{ $item['price'] }} <br>

                        @endforeach

                    <br>
                    
                    @endforeach
                    </p>
                    <a href="{{ route('cart.index') }}" class="btn btn-success">Go to the cart</a>
                    <a href="{{ route('order') }}" class="btn btn-warning">Add items to cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
