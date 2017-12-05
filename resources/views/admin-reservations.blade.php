@extends('admin-layout')

@section('content')
    <div style="padding-top: 10px;">
        <h4 style="padding:10px 0; padding-left: 40px;">
            VIEW ALL THE RESERVATIONS HERE :
        </h4>
        <div>
        DUE RESERVATIONS
        @foreach($res_items as $res_item)
        @if($res_item->delivered==0)
            <ul>
                <li>{{ $res_item->name }}</li>
                <li>{{ $res_item->email }}</li>
                <li>{{ $res_item->phone }}</li>
                <li>{{ $res_item->no_of_people }}</li>
                <li>{{ $res_item->time_slot }}</li>
                <li>{{ $res_item->res_date }}</li>
                <li>{{ $res_item->place }}</li>
                <form method="POST" action="{{ route('admin.reservations.update',$res_item->id) }}">
                    {{ csrf_field() }}
                    <div>
                        <label for="delivered">
                            Delivered
                        </label>
                        <input type="checkbox" name="delivered" id="delivered" value="1" {{ $res_item->delivered==1?"checked":"" }} >
                        &nbsp
                    <button type="submit" class="btn btn-success btn-sm">OK</button>
                    </div>
                </form>
            </ul>
        @endif
        @endforeach
        </div>
        
        <div>
        DONE RESERVATIONS
        @foreach($res_items as $res_item)
        @if($res_item->delivered==1)
            <ul>
                <li>{{ $res_item->name }}</li>
                <li>{{ $res_item->email }}</li>
                <li>{{ $res_item->phone }}</li>
                <li>{{ $res_item->no_of_people }}</li>
                <li>{{ $res_item->time_slot }}</li>
                <li>{{ $res_item->res_date }}</li>
                <li>{{ $res_item->place }}</li>
                <form method="POST" action="{{ route('admin.reservations.update',$res_item->id) }}">
                    {{ csrf_field() }}
                    <div>
                        <label for="delivered">
                            Delivered
                        </label>
                        <input type="checkbox" name="delivered" id="delivered" value="1" {{ $res_item->delivered==1?"checked":"" }} >
                        &nbsp
                    <button type="submit" class="btn btn-success btn-sm">OK</button>
                    </div>
                </form>
            </ul>
        @endif
        @endforeach
        </div>
    </div>

@endsection
