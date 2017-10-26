@extends('admin-layout')

@section('content')
    <div style="padding-top: 10px;">
        <h4 style="padding:10px 0; padding-left: 40px;">
            ADD NEW FOOD ITEM HERE :
        </h4>
        <form method="POST" action="#"  class="form-horizontal" style="padding: 20px;">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">Food &nbsp;Item&nbsp; Name</label>

                <div class="col-md-8 col-md-offset-1">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                <label for="category" class="col-md-2 control-label">Food &nbsp;Category</label>

                <div class="col-md-8 col-md-offset-1">
                    <select id="category" class="form-control" name="category" required >
                        <option value="starter">Starter</option>
                        <option value="maincourse">Main-Course</option>
                        <option value="dessert">Dessert</option>
                        <option value="beverage">Beverage</option>
                    </select>
                    @if ($errors->has('category'))
                        <span class="help-block">
                            <strong>{{ $errors->first('category') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('cost') ? ' has-error' : '' }}">
                <label for="cost" class="col-md-2 control-label">Food &nbsp;Item&nbsp; Cost</label>

                <div class="col-md-8 col-md-offset-1">
                    <input id="cost" type="number" class="form-control" name="cost" value="{{ old('cost') }}" required >

                    @if ($errors->has('cost'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cost') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('is_veg') ? ' has-error' : '' }}">
                <label for="is_veg" class="col-md-2 control-label">Is the food veg?</label>

                <div class="col-md-8 col-md-offset-1">
                    <select id="is_veg" class="form-control" name="is_veg" required >
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                    @if ($errors->has('is_veg'))
                        <span class="help-block">
                            <strong>{{ $errors->first('is_veg') }}</strong>
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
            <div class="viewc" style="padding-left:20px; ">
                @foreach($items as $item)
                    <ul>
                        <li>{{ $item->name }}</li>
                        <li>{{ $item->cost }}</li>
                        <li>{{ $item->category }}</li>
                        <li>{{ $item->is_veg }}</li>
                    </ul>   
                @endforeach
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