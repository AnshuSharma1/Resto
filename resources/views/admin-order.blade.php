@extends('admin-layout')

@section('content')
    <div style="padding-top: 10px;">
        <h4 style="padding:10px 0; padding-left: 40px;">
            VIEW ALL THE ORDERS HERE :
        </h4>
        @foreach($orders as $order)
            <ul>
                <li>{{ $order->name }}</li>
                <li>{{ $order->address }}</li>
                <li>{{ $order->phone }}</li>
            </ul>
        @endforeach
    </div>

@endsection
