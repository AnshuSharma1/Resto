@extends('admin-layout')

@section('content')
    <div style="padding-top: 10px;">
        <h4 style="padding:10px 0; padding-left: 40px;">
            VIEW ALL THE FEEDBACK AND INFO ASKED HERE :
        </h4>
        @foreach($con_items as $con_item)
            <ul>
                <li>{{ $con_item->name }}</li>
                <li>{{ $con_item->email }}</li>
                <li>{{ $con_item->message }}</li>
            </ul>
        @endforeach
    </div>

@endsection
