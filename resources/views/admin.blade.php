@extends('layout')

@section('style')
    .nav-ul li a{
    background-color: white;
    color: black;
    text-transform: uppercase;
    letter-spacing:2px;
    font-size:15px;
    }
    @endsection
@section('content')
<div class="container" style="padding: 30px;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="padding: 30px;">ADMIN Dashboard</div>

                <div class="panel-body" style="padding: 30px;">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                       <nav role="navigation">
                           <ul class="nav nav-pills text-center nav-ul">
                               <li role="presentation" class="col-md-2 active"><a href="/admin">Home</a></li>
                               <li role="presentation" class="col-md-2 "><a href="/admin/menu">Menu</a></li>
                               <li role="presentation" class="col-md-2"><a href="#">Orders</a></li>
                               <li role="presentation" class="col-md-3"><a href="#">Reservations</a></li>
                               <li role="presentation" class="col-md-2"><a href="#">Users</a></li>
                           </ul>
                           <hr style="margin-top: 10px;border-color: #ababab;">
                       </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
