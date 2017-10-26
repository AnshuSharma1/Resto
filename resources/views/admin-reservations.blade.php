@extends('admin-layout')

@section('content')
    <div style="padding-top: 10px;">
        <h4 style="padding:10px 0; padding-left: 40px;">
            VIEW ALL THE RESERVATIONS HERE :
        </h4>
        @foreach($res_items as $res_item)
            <ul>
                <li>{{ $res_item->name }}</li>
                <li>{{ $res_item->email }}</li>
                <li>{{ $res_item->phone }}</li>
                <li>{{ $res_item->no_of_people }}</li>
                <li>{{ $res_item->time_slot }}</li>
                <li>{{ $res_item->res_date }}</li>
                <li>{{ $res_item->place }}</li>
            </ul>
        @endforeach
    </div>

@endsection
