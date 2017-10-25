@extends('admin-layout')

@section('content')
    <div style="padding-top: 10px;">
        <h4 style="padding:10px 0; padding-left: 40px;">
            VIEW ALL THE RESERVATIONS HERE :
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

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </div>
        </form>
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