@extends('layout')
@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3" style="padding: 30px;">
     @if(Cart::subtotal()!=0)
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th style="padding:0 100px;">Price</th>
            <th>Quantity</th>
        </tr>
        </thead>
        @foreach($cartItems as $cartItem)
        <tr>
            <td>{{ $cartItem->name }}</td>
            <td style="padding:0 100px;">{{ $cartItem->price }}</td>
            <td >
                {!! Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}
                    <input name="qty" type="text" value="{{$cartItem->qty}}">
                    <input type="submit" value="Ok" class="btn btn-sm btn-default">
                {!! Form::close() !!}
            </td>
            <td style="padding-left:10px;">
                <form action="{{route('cart.destroy',$cartItem->rowId)}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input type="submit" name="" value="Delete" class="btn btn-danger">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <table>
        <tr>
            <td>TAX : {{Cart::tax()}}</td>
            <td style="padding:0 100px;">SUB : {{Cart::subtotal()}}</td>
            <td>TOTAL : {{Cart::total()}}</td>
        </tr>
    </table>
    <br>
    <a class="btn btn-primary" href="{{ route('checkout.shipping') }}">Checkout</a>
    @else
    <h3> NO ITEMS IN THE CART!</p>
    @endif
</div>
</div>
@endsection