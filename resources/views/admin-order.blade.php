@extends('admin-layout')

@section('content')
    <div style="padding-top: 10px;">
        <h4 style="padding:10px 0; padding-left: 40px;">
            VIEW ALL THE ORDERS HERE :
        </h4>
        <div>
        UNDELIVERED ORDERS
        @foreach($orders as $order)
        @if($order->delivered==0)
            <ul>
                <li>{{ $order->name }}</li>
                <li>{{ $order->address }}</li>
                <li>{{ $order->phone }}</li>
                <li>{{ $order->dtype }}</li>
                <form method="POST" action="{{ route('admin.order.update',$order->id) }}">
                    {{ csrf_field() }}
                    <div>
                        <label for="delivered">
                            Delivered
                        </label>
                        <input type="checkbox" name="delivered" id="delivered" value="1" {{ $order->delivered==1?"checked":"" }}>
                        &nbsp
                    <button type="submit" class="btn btn-success btn-sm">OK</button>
                    </div>
                </form> 
            </ul>    
            <br>
        @endif
        @endforeach
        </div>
        <div>
        DELIVERED ORDERS
        @foreach($orders as $order)
        @if($order->delivered==1)
            <ul>
                <li>{{ $order->name }}</li>
                <li>{{ $order->address }}</li>
                <li>{{ $order->phone }}</li>
                <li>{{ $order->dtype }}</li>
                <form method="POST" action="{{ route('admin.order.update',$order->id) }}">
                    {{ csrf_field() }}
                    <div>
                        <label for="delivered">
                            Delivered
                        </label>
                        <input type="checkbox" name="delivered" id="delivered" value="1" {{ $order->delivered==1?"checked":"" }}>
                        &nbsp
                    <button type="submit" class="btn btn-success btn-sm">OK</button>
                    </div>
                </form> 
            </ul>    
            <br>
        @endif
        @endforeach
        </div>
                
    </div>
 
@endsection
