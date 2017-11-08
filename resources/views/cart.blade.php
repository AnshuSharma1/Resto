@extends('layout')
@section('content')
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cartItems as $cartItem)
        <tr>
            <td>{{ $cartItem->name }}</td>
            <td>{{ $cartItem->price }}</td>
            <td width="50px">
                {!! Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}
                    <input name="qty" type="text" value="{{$cartItem->qty}}">
                    <input type="submit" value="Ok" class="btn btn-sm btn-default">
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        <tr>
            <td></td>
            <td>{{Cart::total()}}</td>
            <td style="font-weight: bold;">{{Cart::count()}}</td>
        </tr>
        </tbody>
    </table>
    <button class="btn btn-primary">Checkout</button>
@endsection