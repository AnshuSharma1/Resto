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
                            <hr style="margin-top: 20px;border-color: #ababab;">
                        </nav>
                        <div style="padding: 10px;">
                            <h3 style="margin-top: 10px;">Lorem ipsum dolor sit.</h3>
                            <p style="margin-top: 20px;">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, nam, ut? Adipisci dolore
                                dolorem doloremque ea enim ex illo inventore ipsum iste iure iusto labore magnam minima
                                neque numquam officia omnis porro quasi quisquam rerum saepe sit soluta, temporibus vel,
                                voluptates? Ab amet corporis hic id nesciunt quis saepe ut?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
