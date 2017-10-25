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
                                <li role="presentation" class="col-md-2"><a href="/admin">Home</a></li>
                                <li role="presentation" class="col-md-2 active"><a href="/admin/menu">Menu</a></li>
                                <li role="presentation" class="col-md-2"><a href="#">Orders</a></li>
                                <li role="presentation" class="col-md-3"><a href="#">Reservations</a></li>
                                <li role="presentation" class="col-md-2"><a href="#">Users</a></li>
                            </ul>
                            <hr style="margin-top: 20px;border-color: #ababab;">
                        </nav>
                            <h4 style="padding:10px 0; padding-left: 40px;">
                                ADD NEW FOOD ITEM HERE :
                            </h4>
                            <form method="POST" action=""  class="form-horizontal" style="padding: 20px;">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('food-name') ? ' has-error' : '' }}">
                                    <label for="food-name" class="col-md-2 control-label">Food &nbsp;Item&nbsp; Name</label>

                                    <div class="col-md-8 col-md-offset-1">
                                        <input id="food-name" type="text" class="form-control" name="food-name" value="{{ old('food-name') }}" required autofocus>

                                        @if ($errors->has('food-name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('food-name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('food-category') ? ' has-error' : '' }}">
                                    <label for="food-category" class="col-md-2 control-label">Food &nbsp;Category</label>

                                    <div class="col-md-8 col-md-offset-1">
                                        <select id="food-category" class="form-control" name="food-category" required >
                                            <option value="starter">Starter</option>
                                            <option value="maincourse">Main-Course</option>
                                            <option value="dessert">Dessert</option>
                                            <option value="beverage">Beverage</option>
                                        </select>
                                            @if ($errors->has('food-name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('food-name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('food-cost') ? ' has-error' : '' }}">
                                    <label for="food-cost" class="col-md-2 control-label">Food &nbsp;Item&nbsp; Cost</label>

                                    <div class="col-md-8 col-md-offset-1">
                                        <input id="food-cost" type="number" class="form-control" name="food-cost" value="{{ old('food-cost') }}" required >

                                        @if ($errors->has('food-cost'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('food-cost') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('food-category') ? ' has-error' : '' }}">
                                    <label for="food-category" class="col-md-2 control-label">Is the food veg?</label>

                                    <div class="col-md-8 col-md-offset-1">
                                        <input type="checkbox" name="food-category" id="food-category" required style="vertical-align: bottom;">
                                        @if ($errors->has('food-category'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('food-category') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </form>

                        <div class="menu-view">
                            <label style="padding: 0 0 0 40px;margin: 0;font-size: 19px;font-weight: 600;" for="view_check">View the items of the menu??</label>
                            <input type="checkbox" id="view_check" style="margin-bottom: 20px; margin-left: 20px;" >
                            <div class="viewc">
                                Something
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.viewc').hide();
            $("#view_check").click(function () {
                $(".viewc").toggle();
            });
        });
    </script>
@endsection