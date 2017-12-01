@extends('layout')
@section('content')

<br>
<div class="row" style="margin: 0 40px;">
    <div class="col-sm-6 col-sm-offset-3">
        <h3>Shipping Info</h3>
        <br>
        {!! Form::open(['route' => 'checkout.shipping', 'method' => 'post']) !!}

        <div class="form-group">
            {{ Form::label('addressline', 'Address Line') }}
            {{ Form::text('addressline', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('city', 'City') }}
            {{ Form::text('city', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('state', 'State') }}
            {{ Form::text('state', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('zip', 'Zip') }}
            {{ Form::text('zip', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('country', 'Country') }}
            {{ Form::text('country', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('phone', 'Phone') }}
            {{ Form::text('phone', null, array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Proceed to Payment', array('class' => 'btn btn-success')) }}

        {!! Form::close() !!}
    </div>
</div>

@endsection