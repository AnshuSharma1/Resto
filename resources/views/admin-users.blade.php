@extends('admin-layout')

@section('content')
<div style="padding-top: 10px;">
    <h4 style="padding:10px 0; padding-left: 40px;">
        VIEW ALL THE USERS HERE :
    </h4>
    @foreach($users as $user)
    <ul>
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
        <li>{{ $user->phone }}</li>
        <li>{{ $user->address }}</li>
        <li>{{ $user->gender }}</li>
    </ul>
    @endforeach
</div>

@endsection
