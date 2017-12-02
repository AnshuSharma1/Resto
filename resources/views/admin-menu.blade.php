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

            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                <label for="price" class="col-md-2 control-label">Food &nbsp;Item&nbsp; Price</label>

                <div class="col-md-8 col-md-offset-1">
                    <input id="price" type="number" class="form-control" name="price" value="{{ old('price') }}" required >

                    @if ($errors->has('price'))
                        <span class="help-block">
                            <strong>{{ $errors->first('price') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                <label for="description" class="col-md-2 control-label">Description</label>

                <div class="col-md-8 col-md-offset-1">
                    <textarea name="description" id="description" cols="30" rows="7" class="form-control" required></textarea>
                    @if ($errors->has('description'))
                        <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
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
    </div>

@endsection
